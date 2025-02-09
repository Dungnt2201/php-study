<?php

// 1. Error Handling and Validation

use MyWebsite\Utils\Validator; // Use the Validator class

$errors = []; // Array to store validation errors

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!Validator::validateName($name)) {
        $errors['name'] = "Name is required.";
    }

    if (!Validator::validateEmail($email)) {
        $errors['email'] = "Invalid email format.";
    }

    if (!Validator::validatePassword($password)) {
        $errors['password'] = "Password must be at least 8 characters.";
    }


    // 2. File Upload

    $targetDir = "uploads/"; // Directory to store uploaded files
    $fileName = basename($_FILES["profile_image"]["name"]);
    $targetFile = $targetDir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file is a actual image or fake image
    $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $errors['profile_image'] = "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $errors['profile_image'] = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profile_image"]["size"] > 500000) { // 500KB
        $errors['profile_image'] = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $errors['profile_image'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errors['profile_image'] = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["profile_image"]["name"])). " has been uploaded.";
        } else {
            $errors['profile_image'] = "Sorry, there was an error uploading your file.";
        }
    }


    if (empty($errors)) { // If no validation errors
        // 3. Sendmail (example)

        $to = $email;
        $subject = "Welcome to My Website!";
        $message = "Dear " . $name . ",\n\nThank you for registering!";
        $headers = "From: webmaster@example.com\r\n";
        $headers .= "Reply-To: webmaster@example.com\r\n";
        // More headers if needed (e.g., CC, BCC, HTML email)

        if (mail($to, $subject, $message, $headers)) {
            echo "Registration successful! Check your email.";
        } else {
            echo "Error sending email.";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        .error {
            color: red;
        }
        label {
            display: block; /* Makes labels stack nicely */
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50; /* Green */
            color: white;
            border: 1px solid black;
            cursor: pointer;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .background-image {
         background-image: url('https://www.shutterstock.com/image-photo/businessman-using-tablet-computer-connecting-260nw-1941286297.jpg');
            width: auto;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;        
         }
    </style>
</head>
<body>
<div class="container">
    <h2>Register Form</h2>
    <div class="background-image"></div>
    <?php if (!empty($errors)): ?>
        <ul class="error">
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="avatar">Avatar:</label>
        <input type="file" name="avatar" id="avatar"><br>
        <br>
        <input type="submit" value="Register">
    </form>
</div>
</body>
</html>