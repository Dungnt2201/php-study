<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\DiscountService;

class DiscountServiceTest extends TestCase
{
    public function test_it_calculates_discount_correctly()
    {
        $service = new DiscountService();

        $price = 100;
        $discount = 10; // 10% discount

        $expectedPrice = 90; // 100 - (100 * 10 / 100)
        $this->assertEquals($expectedPrice, $service->calculateDiscountedPrice($price, $discount));
    }

    public function test_it_throws_exception_for_invalid_discount()
    {
        $this->expectException(\InvalidArgumentException::class);

        $service = new DiscountService();
        $service->calculateDiscountedPrice(100, 110); // Discount vượt quá 100%
    }
}
