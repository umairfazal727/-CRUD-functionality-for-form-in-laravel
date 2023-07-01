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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload', [App\Http\Controllers\FormController::class, 'store'])->name('upload');
Route::post('/update', [App\Http\Controllers\FormController::class, 'update'])->name('update-form');
Route::get('/delete/{id}', [App\Http\Controllers\FormController::class, 'destroy'])->name('delete-form');


