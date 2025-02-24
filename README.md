# 🛠 Build TODO App with Laravel and Authentication

### 📌 Mô tả
Đây là một ứng dụng TODO đơn giản được xây dựng bằng Laravel. Ứng dụng cho phép người dùng quản lý công việc với các chức năng CRUD (Tạo, Xem, Cập nhật, Xóa). Hệ thống xác thực được triển khai bằng Laravel Breeze.

### ☘️Tính năng

Xác thực người dùng (Đăng nhập & Đăng ký)

Thêm, chỉnh sửa, xóa công việc

Hiển thị danh sách công việc trên Dashboard


### ⚙️ Hướng dẫn cài đặt

Yêu cầu hệ thống

Đảm bảo bạn đã cài đặt:

PHP 8.2+

Composer

Node.js & NPM (để xử lý giao diện)

Laravel 10+

MySQL hoặc SQLite (để lưu trữ dữ liệu)

### 🚀 Các bước triển khai

#### Clone repository

        git clone https://github.com/your-username/laravel-todo.git

        cd laravel-todo

#### Cài đặt các thư viện cần thiết

        composer install
        npm install && npm run dev

### Tạo file môi trường

        cp .env.example .env

#### Cấu hình cơ sở dữ liệu

Mở file .env và chỉnh sửa cấu hình database:

DB_DATABASE=laravel_todo

DB_USERNAME=root

DB_PASSWORD=

#### Chạy migrations:

        php artisan migrate

#### Cài đặt Laravel Breeze UI

Cài đặt Laravel Breeze:

        composer require laravel/breeze --dev

Cài đặt giao diện với Blade:

        php artisan breeze:install blade

Chạy migrations nếu chưa chạy:

        php artisan migrate

Biên dịch assets giao diện:

        npm install && npm run dev

Tạo dữ liệu mẫu (Tùy chọn)

        php artisan db:seed

#### Chạy ứng dụng

        php artisan serve

Mở trình duyệt và truy cập http://127.0.0.1:8000.

### ✅ Kết quả mong đợi

1. Đăng ký/Đăng nhập để truy cập Dashboard.
Link:http://127.0.0.1:8000/register
![image](https://github.com/user-attachments/assets/2bd5e49a-24bd-4664-a237-67a5dfd2d89c)

or
Link:http://127.0.0.1:8000/login

![image](https://github.com/user-attachments/assets/c206d051-d45d-418d-8369-98e9c5cb1820)

2.Tạo công việc mới bằng cách nhập vào ô trên Dashboard.

Link:http://127.0.0.1:8000/dashboard
![image](https://github.com/user-attachments/assets/88755e0b-0e27-4e9b-ad15-e252739b1e70)

![image](https://github.com/user-attachments/assets/5aa58c61-52ce-4d72-8f9c-dcb21cd4dab4)

3. Chỉnh sửa/Xóa công việc bằng cách sử dụng các nút tương ứng.

![image](https://github.com/user-attachments/assets/0f80ed83-6fe7-45a2-b37f-aad2df3056d4)

