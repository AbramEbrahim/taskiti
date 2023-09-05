<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::get('/products/order',[OrderController::class,'index'])->name('product.order');

// Route::view('/products/order','product.order')->name('product.order');
Route::view('/products/create','product.create')->name('product.create');
Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/products/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('/products/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::put('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');

Route::resource('/category',CategoryController::class);

Route::get('/', function () {
    return view('welcome');
});

