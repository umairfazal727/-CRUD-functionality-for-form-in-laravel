<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product-details/{id}', [HomeController::class, 'productDetails'])->name('product-details');
Route::post('/save-order', [HomeController::class, 'saveOrder'])->name('save-order');
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/confirm-order', [HomeController::class, 'confirmOrder'])->name('confirm-order');
Route::get('/profile', [HomeController::class, 'index'])->middleware('checkUserRole')->name('profile');
Route::get('/buyer-dashboard', [HomeController::class, 'buyerDashboard'])->name('buyer-dashboard');
Route::get('/seller-dashboard', [HomeController::class, 'sellerDashboard'])->name('seller-dashboard');
