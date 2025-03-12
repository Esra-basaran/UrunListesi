<?php

namespace App\Http\Controllers;

use App\Models\Product; // Modeli dahil et
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Ürünleri listeleme
    public function index()
    {
        $products = Product::all(); // Tüm ürünleri al
        return view('product', compact('products'));
    }
}
