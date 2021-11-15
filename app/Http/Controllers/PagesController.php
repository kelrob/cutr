<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Color;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Testimonial;
use App\Models\User;

class PagesController extends Controller
{
    public function dashboard()
    {
        $productCount = Product::all()->count();
        $categoryCount = Category::all()->count();
        $orders = Order::all();
        $users = User::all();
        return view('pages.dashboard.index', compact('productCount', 'categoryCount', 'orders', 'users'));
    }

    public function products()
    {
        $products = Product::with('user')->orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.products', compact('products'));
    }

    public function newProduct()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $subCategories = SubCategory::orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.new-product', compact('categories', 'subCategories'));
    }

    public function viewProduct($id)
    {
        $product = Product::with('user', 'product_images')->where('id', $id)->first();

        return view('pages.dashboard.view-product', compact('product'));
    }

    public function editProduct($id)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $product = Product::with('user', 'product_images', 'category')->where('id', $id)->first();

        return view('pages.dashboard.edit-product', compact('product', 'categories'));
    }

    public function orders()
    {
        $orders = Order::with('user', 'product', 'order_status')->orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.orders', compact('orders'));
    }

    public function categories()
    {
        $categories = Category::with('products')->orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.categories', compact('categories'));
    }

    public function users()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.users', compact('users'));
    }

    public function banners()
    {
        $banners = Banner::orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.banners', compact('banners'));
    }

    public function newBanner()
    {
        return view('pages.dashboard.new-banner');
    }

    public function editBanner($id)
    {
        $decodedId = base64_decode($id);
        $banner = Banner::where('id', $decodedId)->first();
        return view('pages.dashboard.edit-banner', compact('banner'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.testimonials', compact('testimonials'));
    }

    public function newTestimonial()
    {
        return view('pages.dashboard.new-testimonial');
    }

    public function editTestimonial($id)
    {
        $decodedId = base64_decode($id);
        $testimonial = Testimonial::where('id', $decodedId)->first();
        return view('pages.dashboard.edit-testimonial', compact('testimonial'));
    }

    public function newCategory()
    {
        return view('pages.dashboard.new-category');
    }

    public function subCategories()
    {
        $subCategories = SubCategory::orderBy('created_at', 'DESC')->get();
        return view('pages.dashboard.sub-categories', compact('subCategories'));
    }

    public function newSubCategory()
    {
        return view('pages.dashboard.new-sub-category');
    }

    public function colors()
    {
        $colors = Color::orderBy('id', 'DESC')->get();
        return view('pages.dashboard.colors', compact('colors'));
    }

    public function newColor()
    {
        return view('pages.dashboard.new-color');
    }

    public function editColor($id)
    {
        $decodedId = base64_decode($id);
        $color = Color::where('id', $decodedId)->first();
        return view('pages.dashboard.edit-color', compact('color'));
    }

    public function coupons()
    {
        $coupons = Coupon::orderBy('id', 'DESC')->get();
        return view('pages.dashboard.coupons', compact('coupons'));
    }

    public function newCoupon()
    {
        return view('pages.dashboard.new-coupon');
    }

    public function editCoupon($id)
    {
        $decodedId = base64_decode($id);
        $coupon = Coupon::where('id', $decodedId)->first();
        return view('pages.dashboard.edit-coupon', compact('coupon'));
    }
}
