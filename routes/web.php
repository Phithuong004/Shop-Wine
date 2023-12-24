<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\WineController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [WineController::class, 'index', 'showCart'])->name('home');



Route::get('/signup', function () {
   return view('register');
})->name('signup');

Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/login', function () {
   return view('/login');
})->name('login');

Route::get('/product-details/{id}', [WineController::class, 'showProductDetails'])->name('product.details');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/forgot-password', function () {
   return view('forgot-password');
})->name('forget.password');

Route::post('/forgot-password', [ForgotController::class, 'forgotPassword']);

Route::get('/reset-password/{token}', [ForgotController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [ForgotController::class, 'resetPassword'])->name('reset.password.post');

Route::get('/cart', [WineController::class, 'wineCart'])->name('cart');
Route::get('/add-to-cart/{id}', [WineController::class, 'addToCart'])->name('add.to.cart');
Route::post('/update-cart', [WineController::class, 'updateCart'])->name('update.cart');
Route::get('/delete-product/{id}', [WineController::class, 'deleteProduct'])->name('delete.product');
Route::get('/remove-from-cart/{id}', [WineController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('success-form', function () {
   return view('success-form');
})->name('success-form');

Route::get('/search', [WineController::class, 'search'])->name('search');

Route::get('/products/{id}', [WineController::class, 'detailsProduct'])->name('details');