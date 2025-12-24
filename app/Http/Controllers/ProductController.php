<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = [
            1 => ['name' => 'Laptop', 'price' => 25000, 'description' => 'High-performance laptop for developers'],
            2 => ['name' => 'Smartphone', 'price' => 15000, 'description' => 'Latest smartphone with great camera'],
            3 => ['name' => 'Headphones', 'price' => 3500, 'description' => 'Wireless noise-cancelling headphones'],
        ];

        $product = $products[$id] ?? ['name' => 'Unknown Product', 'price' => 0, 'description' => 'Product not found'];
        $product['id'] = $id;

        return view('product', compact('product'));
    }
}