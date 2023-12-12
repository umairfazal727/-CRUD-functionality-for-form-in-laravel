<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product-details/{id}', [App\Http\Controllers\HomeController::class, 'productDetails'])->name('product-details');
Route::post('/save-order', [App\Http\Controllers\HomeController::class, 'saveOrder'])->name('save-order');
Route::get('checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::post('/confirm-order', [App\Http\Controllers\HomeController::class, 'confirmOrder'])->name('confirm-order');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->middleware('checkUserRole')->name('profile');
Route::get('/buyer-dashboard', [App\Http\Controllers\HomeController::class, 'buyerDashboard'])->name('buyer-dashboard');
Route::get('/seller-dashboard', [App\Http\Controllers\HomeController::class, 'sellerDashboard'])->name('seller-dashboard');
