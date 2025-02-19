# 🧪 Laravel Testing - Unit Test for Discount Service

## 📌 Mô tả
Bài tập này giúp bạn thực hành Laravel Unit Testing bằng cách kiểm tra dịch vụ tính giá sau chiết khấu trong Laravel.
Service sẽ nhận giá gốc và phần trăm chiết khấu, sau đó tính toán và trả về giá cuối cùng.

## 📂 Cấu trúc thư mục
laravel-study2/

│── app/

    │   └── Services/

    │       └── DiscountService.php

│── tests/

    │   └── Unit/

    │       └── DiscountServiceTest.php

## 🔧 Cài đặt
Chạy lệnh sau để cài đặt PHPUnit nếu chưa có:
''sh
composer require --dev phpunit/phpunit:^10.0
composer dump-autoload

## 🚀 Cách chạy Unit Test
Chạy toàn bộ test : php artisan test
Chạy test cho DiscountServiceTest: php artisan test --filter=DiscountServiceTest

## ✅ Kết quả mong đợi
PASS  Tests\Unit\DiscountServiceTest
✓ it calculates discount correctly
✓ it throws exception for invalid discount
![Screenshot_9](https://github.com/user-attachments/assets/40958309-8a9e-41c9-b099-489c124c89e7)

