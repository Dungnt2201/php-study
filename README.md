# 🛠 Laravel API Authentication với Sanctum

## 📌 Mô tả
Bài tập hướng dẫn cài đặt và thiết lập API Authentication trong Laravel sử dụng Sanctum. Người dùng có thể đăng ký, đăng nhập, xác thực API bằng token và đăng xuất.

## ⚙️ Hướng dẫn cài đặt
composer create-project laravel/laravel api-auth-demo

cd api-auth-demo

composer require laravel/sanctum

php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

php artisan migrate

## 🚀 Các bước thực hiện
1.Cấu hình Sanctum: Thêm middleware vào Kernel.php và User.php.

2.Tạo API Authentication: Thêm route đăng ký, đăng nhập, đăng xuất trong routes/api.php.

3.Kiểm tra API bằng Postman:

### Đăng ký (/api/register)

Method: POST

URL: http://127.0.0.1:8000/api/register

Body (JSON):

        {
            "name": "John Doe",
            "email": "johndoe@example.com",
            "password": "123456"
        }

### Đăng nhập để lấy token (/api/login)

Method: POST

URL: http://127.0.0.1:8000/api/login

Body (JSON):

        {
            "email": "johndoe@example.com",
            "password": "123456"
        }
    
### Đăng xuất (/api/logout)

Gửi request có token để xác thực (Authorization: Bearer token)

Method: POST

URL: http://127.0.0.1:8000/api/logout

Headers:

        Authorization: Bearer your-api-token

## ✅ Kết quả mong đợi
Kiểm tra API bằng Postman hoạt động chính xác.

Người dùng có thể đăng ký, đăng nhập và xác thực API bằng token.

Chỉ những request có token hợp lệ mới truy cập được API bảo vệ.
![Screenshot_12](https://github.com/user-attachments/assets/e89afc22-d9b6-471b-8d41-2cadcb8cbfc0)
![Screenshot_13](https://github.com/user-attachments/assets/614e8ef2-5c8e-4794-bfe7-4c4953b9d885)
![Screenshot_14](https://github.com/user-attachments/assets/0d42dbc9-f884-4569-b893-82068aad02b4)



