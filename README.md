# Travel Blog

## 📌Giới Thiệu

Đây là một dự án blog du lịch đơn giản, cho phép người dùng đăng nhập, đăng ký tài khoản, truy cập trang chủ và xem chi tiết bài viết. Ngoài ra, hệ thống kiểm soát quyền của người dùng, cho phép một số người có thể bình luận.
## 📂  Cấu trúc thư mục 
![image](https://github.com/user-attachments/assets/1e7e4259-70c0-44c3-a981-cdc2d353f1aa)

## ⚙️ Chức Năng Chính
1. Đăng ký & Đăng nhập: Sử dụng laravel template auth UI . 
Link: http://127.0.0.1:8000/login
![image](https://github.com/user-attachments/assets/de0d0072-f62f-4f5c-9652-2419405ad275)
Link: http://127.0.0.1:8000/register
![image](https://github.com/user-attachments/assets/82cd1f04-d84c-45f1-b327-25272df5a48c)

2.Trang chủ (Home Page): Hiển thị danh sách bài viết du lịch.
Link: http://127.0.0.1:8000/home
![image](https://github.com/user-attachments/assets/6272f782-5b37-4d05-8084-87a841b63fe7)


3.Chi tiết bài viết: Người dùng có thể xem nội dung chi tiết của một bài viết.
Link: http://127.0.0.1:8000/content
![image](https://github.com/user-attachments/assets/9b677947-e8e1-42ae-bfbb-e07df2b4ae90)

### Phân quyền người dùng:

Viewer: Chỉ có thể xem nội dung bài viết.

Commenter: Có thể gửi form đăng ký bình luận và đăng bình luận vào bài viết.

### Feature Testing:

Kiểm tra hiển thị trang chủ và danh sách bài viết.

## 🔧 Cài đặt & Chạy dự án
1️⃣ Clone dự án về máy
git clone https://github.com/your-username/your-repo.git

cd your-repo

2️⃣ Cài đặt các dependencies

composer install

npm install

npm run dev

3️⃣ Tạo file .env và cấu hình database
cp .env.example .env

php artisan key:generate

Mở file .env và cấu hình kết nối database:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=your_database_name

DB_USERNAME=your_username

DB_PASSWORD=your_password


4️⃣ Chạy migration để tạo bảng

php artisan migrate

5️⃣ Chạy dự án
php artisan serve

Chạy Feature Testing -> Kiểm thử trang HomePage bằng PHPUnit: php artisan test --filter HomePageTest or php artisan test

## ✅ Kết quả mong đợi
Sau khi chạy test thành công, terminal sẽ hiển thị kết qủa tương ứng 
![image](https://github.com/user-attachments/assets/c0cb5376-be32-4eaf-b967-aa5aea41994d)
Hiển thị được các trang web với route tương ứng 

