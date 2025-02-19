<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase; // Reset database trước mỗi test

    /** @test */
    public function it_can_create_a_product()
    {
        // Dữ liệu giả để tạo sản phẩm
        $data = [
            'name' => 'Laptop Dell',
            'price' => 1200,
            'description' => 'Laptop Dell XPS 15 cao cấp'
        ];

        // Gửi request POST để tạo sản phẩm
        $response = $this->post('/products', $data);

        // Kiểm tra phản hồi trả về có mã HTTP 302 (redirect thành công)
        $response->assertStatus(302);

        // Kiểm tra sản phẩm đã tồn tại trong database chưa
        $this->assertDatabaseHas('products', [
            'name' => 'Laptop Dell',
            'price' => 1200
        ]);
    }
}
