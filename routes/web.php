<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\layoutInitialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [layoutInitialController::class, 'layoutInitial'])->name('layout.initial');

Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/store', [ContactController::class, 'store'])->name('index.store');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('edit');
Route::get('/contact/{id}/details', [ContactController::class, 'details'])->name('details');

Route::post('/contact/create', [ContactController::class, 'create'])->name('create');

Route::put('/contact/{id}/update', [ContactController::class, 'update'])->name('update');

Route::delete('/contact/{id}/delete', [ContactController::class, 'delete'])->name('delete');
