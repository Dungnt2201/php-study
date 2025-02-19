<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ... các phương thức khác ...

    public function store(Request $request)
    {
        // 1. Validate dữ liệu từ form
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // 2. Tạo sản phẩm mới
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        // 3. Redirect về trang danh sách sản phẩm và hiển thị thông báo thành công
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được tạo thành công!');
    }
        public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // ... các phương thức khác ...
}