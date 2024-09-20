<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('categories', CategoryController::class);

// route group that uses the controller method to defines common controller

// the routes also have the products prefix method, so we can specify that and remove it in all the routes like below
Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function () {


    Route::get('/', 'index')->name('index');


    Route::get('/create', 'create')->name('create');


    Route::post('/store', 'store')->name('store');


    Route::get('/{product}', 'show')->name('show');


    Route::get('/{product}/edit', 'edit')->name('edit');


    Route::patch('/{product}', 'update')->name('update');


    Route::delete('/{product}', 'destroy')->name('destroy');
});
