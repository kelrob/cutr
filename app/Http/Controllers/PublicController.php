<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Category;

class PublicController extends Controller
{
    public function index()
    {
        $products = Product::limit(4)->inRandomOrder()->get();
        $testimonials = Testimonial::inRandomOrder()->get();
        $categories = Category::limit(8)->inRandomOrder()->get();
        return view('public/index')->with(compact('products', 'testimonials', 'categories'));
    }

    public function productDetails($id)
    {
        $product = Product::whereId($id)->first();
        return view('public/product-details', compact('product'));
    }
}
