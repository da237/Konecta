<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::view('/','app')->name('app');



Route::get('/product',[ProductController::class, 'index'])
->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])
->name('product.create');
Route::post('/product/store',[ProductController::class,'store'])
->name('product.store');
Route::get('/product/edit/{product}',[ProductController::class,'edit'])
->name('product.edit');
Route::put('/product/update/{product}',[ProductController::class,'update'])
->name('product.update');
Route::delete('/product/destroy/{product}',[ProductController::class,'destroy'])
->name('product.destroy');
