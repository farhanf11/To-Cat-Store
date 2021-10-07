<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/dashboard-products', [AdminController::class, 'products'])->name('dashboard.products');
Route::get('/dashboard-transactions', [AdminController::class, 'transactions'])->name('dashboard.transactions');
Route::get('/dashboard-accounts', [AdminController::class, 'accounts'])->name('dashboard.accounts');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{product}', [ProductController::class, 'details'])->name('products.detail');
Route::post('/products/{product}/cart', [ProductController::class, 'addProductToCart'])->name('products.detail.cart');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/orders', [OrderController::class, 'store'])->name('orders');

