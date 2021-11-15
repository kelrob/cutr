<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('pages.login');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', function () {
    Auth::logout();
    return redirect()->to(url('/'));
});

// All Pages
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard')->middleware('auth');
    Route::get('/products', 'PagesController@products')->name('products')->middleware('auth');
    Route::get('/product/new', 'PagesController@newProduct')->name('new-product');
    Route::post('/add-product', 'ProductController@addProduct')->name('add-product');
    Route::get('/product/view/{id}', 'PagesController@viewProduct')->name('view-product');
    Route::get('/product/edit/{id}', 'PagesController@editProduct')->name('edit-product');
    Route::post('/update-product', 'ProductController@editProduct');
    Route::get('/orders', 'PagesController@orders')->name('orders');
    Route::get('/categories', 'PagesController@categories')->name('categories');
    Route::get('/sub-categories', 'PagesController@subCategories')->name('sub-categories');
    Route::get('/category/new', 'PagesController@newCategory')->name('new-category');
    Route::post('/add-category', 'CategoryController@newCategory')->name('new-category');
    Route::post('/add-sub-category', 'CategoryController@newSubCategory')->name('new-sub-category');
    Route::get('/users', 'PagesController@users')->name('users');
    Route::get('/banners', 'PagesController@banners')->name('banners');
    Route::get('/banner/new', 'PagesController@newBanner')->name('new-banner');
    Route::post('add-banner', 'BannerController@addBanner')->name('add-banner');
    Route::get('edit-banner/{id}', 'PagesController@editBanner')->name('edit-banner');
    Route::post('edit-banner', 'BannerController@editBanner')->name('edit-banner');
    Route::get('delete-banner/{id}', 'BannerController@deleteBanner')->name('delete-banner');
    Route::get('delete-product/{id}', 'ProductController@deleteProduct')->name('delete-product');
    Route::get('testimonials', 'PagesController@testimonials')->name('testimonials');
    Route::get('testimonial/new', 'PagesController@newTestimonial')->name('new-testimonial');
    Route::post('add-testimonial', 'TestimonialController@addTestimonial')->name('add-testimonial');
    Route::get('edit-testimonial/{id}', 'PagesController@editTestimonial')->name('edit-testimonial');
    Route::post('update-testimonial', 'TestimonialController@updateTestimonial')->name('update-testimonial');
    Route::get('delete-testimonial/{id}', 'TestimonialController@deleteTestimonial')->name('delete-testimonial');
    Route::get('sub-category/new', 'PagesController@newSubCategory')->name('new-sub-category');
    Route::get('colors', 'PagesController@colors')->name('colors');
    Route::get('color/new', 'PagesController@newColor')->name('new-color');
    Route::post('add-color', 'ColorController@newColor')->name('add-color');
    Route::get('edit-color/{id}', 'PagesController@editColor')->name('edit-color');
    Route::post('update-color', 'ColorController@updateColor')->name('update-color');
    Route::get('delete-color/{id}', 'ColorController@deleteColor')->name('delete-color');
    Route::get('coupons', 'PagesController@coupons')->name('coupons');
    Route::get('coupon/new', 'PagesController@newCoupon')->name('new-coupon');
    Route::post('add-coupon', 'CouponController@newCoupon')->name('add-coupon');
    Route::get('edit-coupon/{id}', 'PagesController@editCoupon')->name('edit-coupon');
    Route::post('update-coupon', 'CouponController@updateCoupon')->name('update-coupon');
    Route::get('delete-coupon/{id}', 'CouponController@deleteCoupon')->name('delete-coupon');
});
