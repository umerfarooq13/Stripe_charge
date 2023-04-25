<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
    $products = Product::all();
    return view('index', compact('products'));
}


public function bill(Product $product)
{
    return view('payment', compact('product'));
}
}
