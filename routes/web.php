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
// Route::post('/update', [App\Http\Controllers\TaskController::class, 'update'])->name('update-task');
// Route::get('/delete/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('delete-task');


