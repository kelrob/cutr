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
    return view('welcome');
});


//Public Auth Routes
Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    return redirect()->to(url('/'));
});

// Public Routes
Route::get('/', 'PublicController@index');

Route::get('/product-details/{id}', 'PublicController@productDetails');

// All Admin
Route::prefix('admin')->group(function () {


    // Admin login routes
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout route
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Register route
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Password reset routes
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');


    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/products', 'AdminController@products')->name('products');
    Route::get('/product/new', 'AdminController@newProduct')->name('new-product');
    Route::post('/add-product', 'ProductController@addProduct')->name('add-product');
    Route::get('/product/view/{id}', 'AdminController@viewProduct')->name('view-product');
    Route::get('/product/edit/{id}', 'AdminController@editProduct')->name('edit-product');
    Route::post('/update-product', 'ProductController@editProduct');
    Route::get('/orders', 'AdminController@orders')->name('orders');
    Route::get('/categories', 'AdminController@categories')->name('categories');
    Route::get('/sub-categories', 'AdminController@subCategories')->name('sub-categories');
    Route::get('/category/new', 'AdminController@newCategory')->name('new-category');
    Route::post('/add-category', 'CategoryController@newCategory')->name('new-category');
    Route::post('/add-sub-category', 'CategoryController@newSubCategory')->name('new-sub-category');
    Route::get('/users', 'AdminController@users')->name('users');
    Route::get('/banners', 'AdminController@banners')->name('banners');
    Route::get('/banner/new', 'AdminController@newBanner')->name('new-banner');
    Route::post('add-banner', 'BannerController@addBanner')->name('add-banner');
    Route::get('edit-banner/{id}', 'AdminController@editBanner')->name('edit-banner');
    Route::post('edit-banner', 'BannerController@editBanner')->name('edit-banner');
    Route::get('delete-banner/{id}', 'BannerController@deleteBanner')->name('delete-banner');
    Route::get('delete-product/{id}', 'ProductController@deleteProduct')->name('delete-product');
    Route::get('testimonials', 'AdminController@testimonials')->name('testimonials');
    Route::get('testimonial/new', 'AdminController@newTestimonial')->name('new-testimonial');
    Route::post('add-testimonial', 'TestimonialController@addTestimonial')->name('add-testimonial');
    Route::get('edit-testimonial/{id}', 'AdminController@editTestimonial')->name('edit-testimonial');
    Route::post('update-testimonial', 'TestimonialController@updateTestimonial')->name('update-testimonial');
    Route::get('delete-testimonial/{id}', 'TestimonialController@deleteTestimonial')->name('delete-testimonial');
    Route::get('sub-category/new', 'AdminController@newSubCategory')->name('new-sub-category');
    Route::get('colors', 'AdminController@colors')->name('colors');
    Route::get('color/new', 'AdminController@newColor')->name('new-color');
    Route::post('add-color', 'ColorController@newColor')->name('add-color');
    Route::get('edit-color/{id}', 'AdminController@editColor')->name('edit-color');
    Route::post('update-color', 'ColorController@updateColor')->name('update-color');
    Route::get('delete-color/{id}', 'ColorController@deleteColor')->name('delete-color');
    Route::get('coupons', 'AdminController@coupons')->name('coupons');
    Route::get('coupon/new', 'AdminController@newCoupon')->name('new-coupon');
    Route::post('add-coupon', 'CouponController@newCoupon')->name('add-coupon');
    Route::get('edit-coupon/{id}', 'AdminController@editCoupon')->name('edit-coupon');
    Route::post('update-coupon', 'CouponController@updateCoupon')->name('update-coupon');
    Route::get('delete-coupon/{id}', 'CouponController@deleteCoupon')->name('delete-coupon');
});
