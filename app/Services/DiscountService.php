<?php

namespace App\Services;

class DiscountService
{
    public function calculateDiscountedPrice(float $price, float $discount): float
    {
        if ($discount < 0 || $discount > 100) {
            throw new \InvalidArgumentException("Discount must be between 0 and 100");
        }

        return $price - ($price * $discount / 100);
    }
}
