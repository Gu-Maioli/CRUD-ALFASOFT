<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\layoutInitialController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [layoutInitialController::class, 'layoutInitial'])->name('layout.initial');

Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::get('/contact/{id}/details', [ContactController::class, 'details'])->name('contact.details');

Route::post('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::put('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contact/{id}/delete', [ContactController::class, 'delete'])->name('contact.delete');



Route::get('product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('product/{id}/details', [ProductController::class, 'details'])->name('product.details');

Route::post('product/create', [ProductController::class, 'create'])->name('product.create');
Route::put('product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');
