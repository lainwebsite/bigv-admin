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

Route::resource('products', 'ProductController');
Route::get('/productdet', function () {
    return view('admin.manage.products.detail');
});