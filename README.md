# 🛠 Laravel Testing - Feature Test for Product Creation

## 📌 Mô tả
Đây là một bài tập thực hành Laravel Testing để kiểm tra tính năng tạo sản phẩm mới trong ứng dụng Laravel. Bài test sẽ gửi một yêu cầu POST đến route /products và kiểm tra xem sản phẩm có được thêm vào cơ sở dữ liệu thành công hay không.

## 📂 Cấu trúc thư mục
![image](https://github.com/user-attachments/assets/4ea15271-afd4-48d4-bebd-c3345cbab84e)

## 🚀 Cài đặt & Chạy thử
1️⃣ Clone Repository

git clone <repo-url>
cd laravel-testing

2️⃣ Cài đặt Laravel & Package

composer install

cp .env.example .env

php artisan key:generate

3️⃣ Cấu hình Database
Chỉnh sửa file .env để kết nối với MySQL hoặc SQLite.

Chạy lệnh migrate và seed dữ liệu:

php artisan migrate --seed

4️⃣ Chạy Test

php artisan test

## ✅ Kết quả mong đợi
Sau khi chạy test thành công, terminal sẽ hiển thị:

PASS  Tests\Feature\ProductTest
✓ it can create a product.
Tests: 1 passed
![Screenshot_8](https://github.com/user-attachments/assets/626ed0d6-5d0d-4586-963c-3bdfb8a2448b)

