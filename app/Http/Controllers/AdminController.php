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

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $productCount = Product::all()->count();
        $categoryCount = Category::all()->count();
        $orders = Order::all();
        $users = User::all();
        return view('admin.index', compact('productCount', 'categoryCount', 'orders', 'users'));
    }

    public function products()
    {
        $products = Product::with('user')->orderBy('created_at', 'DESC')->get();
        return view('admin.products', compact('products'));
    }

    public function newProduct()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $subCategories = SubCategory::orderBy('created_at', 'DESC')->get();
        $colors = Color::all();
        return view('admin.new-product', compact('categories', 'subCategories', 'colors'));
    }

    public function viewProduct($id)
    {
        $product = Product::with('user', 'product_images')->where('id', $id)->first();

        return view('admin.view-product', compact('product'));
    }

    public function editProduct($id)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $product = Product::with('user', 'product_images', 'category')->where('id', $id)->first();
        $colors = Color::all();
        return view('admin.edit-product', compact('product', 'categories', 'colors'));
    }

    public function orders()
    {
        $orders = Order::with('user', 'product', 'order_status')->orderBy('created_at', 'DESC')->get();
        return view('admin.orders', compact('orders'));
    }

    public function categories()
    {
        $categories = Category::with('products')->orderBy('created_at', 'DESC')->get();
        return view('admin.categories', compact('categories'));
    }

    public function users()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('admin.users', compact('users'));
    }

    public function banners()
    {
        $banners = Banner::orderBy('created_at', 'DESC')->get();
        return view('admin.banners', compact('banners'));
    }

    public function newBanner()
    {
        return view('admin.new-banner');
    }

    public function editBanner($id)
    {
        $decodedId = base64_decode($id);
        $banner = Banner::where('id', $decodedId)->first();
        return view('admin.edit-banner', compact('banner'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->get();
        return view('admin.testimonials', compact('testimonials'));
    }

    public function newTestimonial()
    {
        return view('admin.new-testimonial');
    }

    public function editTestimonial($id)
    {
        $decodedId = base64_decode($id);
        $testimonial = Testimonial::where('id', $decodedId)->first();
        return view('admin.edit-testimonial', compact('testimonial'));
    }

    public function newCategory()
    {
        return view('admin.new-category');
    }

    public function subCategories()
    {
        $subCategories = SubCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.sub-categories', compact('subCategories'));
    }

    public function newSubCategory()
    {
        return view('admin.new-sub-category');
    }

    public function colors()
    {
        $colors = Color::orderBy('id', 'DESC')->get();
        return view('admin.colors', compact('colors'));
    }

    public function newColor()
    {
        return view('admin.new-color');
    }

    public function editColor($id)
    {
        $decodedId = base64_decode($id);
        $color = Color::where('id', $decodedId)->first();
        return view('admin.edit-color', compact('color'));
    }

    public function coupons()
    {
        $coupons = Coupon::orderBy('id', 'DESC')->get();
        return view('admin.coupons', compact('coupons'));
    }

    public function newCoupon()
    {
        return view('admin.new-coupon');
    }

    public function editCoupon($id)
    {
        $decodedId = base64_decode($id);
        $coupon = Coupon::where('id', $decodedId)->first();
        return view('admin.edit-coupon', compact('coupon'));
    }
}
