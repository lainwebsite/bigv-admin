<?php

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
    return view('admin.dashboard');
});

Route::resource('orders', 'OrderController');
Route::get('/orderdet', function () {
    return view('admin.manage.orders.detail');
});

Route::resource('categories', 'CategoryController');
Route::get('/categorydet', function () {
    return view('admin.manage.categories.detail');
});

Route::resource('products', 'ProductController');
Route::get('/productdet', function () {
    return view('admin.manage.products.detail');
});

Route::resource('customers', 'CustomerController');
Route::get('/customerdet', function () {
    return view('admin.manage.customers.detail');
});

Route::resource('discounts', 'DiscountController');
Route::get('/discountdet', function () {
    return view('admin.manage.discounts.detail');
});
Route::get('/discountedit', function () {
    return view('admin.manage.discounts.edit');
});

Route::resource('vendors', 'VendorController');
Route::get('/vendordet', function () {
    return view('admin.manage.vendors.detail');
});

Route::get('/login', function () {
    return view('admin.login');
});

// ANALYTICS

Route::get('/product-analytics', function () {
    return view('admin.analytics.products.index');
});

Route::get('/product-analytics/detail', function () {
    return view('admin.analytics.products.detail');
});

Route::get('/vendor-analytics', function () {
    return view('admin.analytics.vendors.index');
});

Route::get('/vendor-analytics/detail', function () {
    return view('admin.analytics.vendors.detail');
});

Route::get('/customer-analytics', function () {
    return view('admin.analytics.customers.index');
});

Route::get('/customer-analytics/detail', function () {
    return view('admin.analytics.customers.detail');
});

Route::get('/order-analytics', function () {
    return view('admin.analytics.orders.index');
});