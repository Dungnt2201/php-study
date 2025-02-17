# Laravel Role-Based Authentication Project

## 📌 Giới thiệu
Dự án này là một hệ thống xác thực người dùng được xây dựng bằng **Laravel**, với chức năng đăng nhập, đăng ký và quản lý quyền hạn (`role-based authentication`). Người dùng có thể đăng nhập với 2 vai trò khác nhau:  

- **Admin** → Được chuyển hướng đến màn hình **Maintenance**  
- **Member** → Được chuyển hướng đến màn hình **Home**  

## ⚙️ Các tính năng chính
- **Register**: Người dùng có thể đăng ký tài khoản mới. Mặc định, tài khoản sẽ có role là **member** và được lưu vào database.  
- **Login**: Người dùng đăng nhập và hệ thống sẽ kiểm tra role của họ:  
  - Nếu là **admin**, sẽ được chuyển đến trang **Maintenance**.  
  - Nếu là **member**, sẽ được chuyển đến trang **Home**.  
- **Role-based Redirect**: Hệ thống tự động điều hướng người dùng sau khi đăng nhập dựa trên vai trò của họ.  

## 🏗️ Cấu trúc màn hình
1. **Login** - Màn hình đăng nhập  
Link:http://127.0.0.1:8000/login
![image](https://github.com/user-attachments/assets/b36ac153-f27d-44c3-ab09-deccda72aa2b)

2. **Register** - Màn hình đăng ký tài khoản mới  
Link:http://127.0.0.1:8000/register
![image](https://github.com/user-attachments/assets/f5a513be-1eba-4c3a-bdbf-68bd6c445337)

3. **Home** - Trang chính dành cho Member  
Link:http://127.0.0.1:8000/home
![image](https://github.com/user-attachments/assets/879a6efa-b0d3-41b1-b9bd-aa178663ee9b)

4. **Maintenance** - Trang dành cho Admin  
Link:http://127.0.0.1:8000/maintenance
![image](https://github.com/user-attachments/assets/1bb3e94c-884b-4275-9abc-c92d99ff13da)
P/s: Login với thông tin account role admin (change trong database)

## 🔧 Cài đặt & Chạy dự án

### 1️⃣ Clone dự án về máy
```sh
git clone https://github.com/your-username/your-repo.git
cd your-repo

### 2️⃣ Cài đặt các dependencies
```sh
composer install
npm install
npm run dev

### 3️⃣ Tạo file .env và cấu hình database
```sh
cp .env.example .env
php artisan key:generate

Mở file .env và cấu hình kết nối database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

### 4️⃣ Chạy migration để tạo bảng
```sh
php artisan migrate

### 5️⃣ Chạy dự án
```sh
php artisan serve
