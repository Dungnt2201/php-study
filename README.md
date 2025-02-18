# Laravel Event & Listener - Ghi Log Sau Khi Người Dùng Đăng Ký

## 📌 Mục Tiêu
Bài tập này giúp bạn hiểu cách sử dụng **Events** và **Listeners** trong Laravel để thực hiện một hành động bất đồng bộ khi một người dùng mới đăng ký. Sau khi người dùng đăng ký thành công, hệ thống sẽ ghi lại thông tin người dùng vào file log.

## ⚙️Các bước thực hiện
1.Tạo Event UserRegistered: Sự kiện này sẽ được kích hoạt khi người dùng đăng ký.

2.Tạo Listener LogUserRegistration: Listener sẽ ghi thông tin người dùng vào file log.

3.Đăng ký Event & Listener trong EventServiceProvider.php.

4.Kích hoạt Event khi người dùng đăng ký trong controller hoặc route.

5.Kiểm tra kết quả bằng cách truy cập route thử nghiệm và xem file log.

## 🚀 Kết quả
Hiển thị và trả về thông tin user sau mỗi lần đăng nhập 
link: http://127.0.0.1:8000/register-test

Ghi thông tin sau khi user đăng ký ở phần log storage/logs/laravel.log
![Screenshot_7](https://github.com/user-attachments/assets/5c5d266a-29dd-433e-8ed3-b513311cee73)
