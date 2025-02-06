<form action="game.php" method="POST">
    LUCK NUMBER 
    <br>
    Guess the number (between 1 and 10): <input type="number" name="guess" min="1" max="10">
    <input type="submit" value="Submit">
</form>

<?php
// Game Logic: 
// The random number is generated once and stored in the session ($_SESSION['number']).
// After submitting the form, the user's guess is compared with the stored number.
// If the guess is correct, a congratulatory message is shown, and the game resets.
// If the guess is wrong, the user is asked to try again

// Start the session to store the random number
session_start();

// If the random number is not set, create one
if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 10);  // Random number between 1 and 10
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = (int)$_POST["guess"];  // Get the user's guess and cast it to integer
    
    if ($guess < 1 || $guess > 10) {
        echo "Please enter a number between 1 and 10.<br>";
    } elseif ($guess == $_SESSION['number']) {
        echo "<font color ='blue'>Congratulations! You guessed the correct number: " . $_SESSION['number'] . ".</font> <br>";
        // Reset the game after a correct guess
        unset($_SESSION['number']);
    } else {
        echo "<font color ='red'>Wrong guess! Try again.</font> <br>";
    }
}
?>

<a href="game.php">Play Again</a>