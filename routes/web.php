<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class);
});
