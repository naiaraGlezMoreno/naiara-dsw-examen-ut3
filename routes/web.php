<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Importamos el controlador
//Naiara Gonzalez Moreno

// Ponemos como ruta base la vista home
Route::get('/', function () {
    return view('home');
});


Route::get('/product', function () {
    return view('product');
});

Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product.create', function () {
    return view('product');
})->name('product.create');