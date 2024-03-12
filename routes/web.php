<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\layoutInitialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [layoutInitialController::class, 'layoutInitial'])->name('layout.initial');

Route::get('/contact/index', [contactController::class, 'index'])->name('contact.index');
Route::get('/contact/store', [contactController::class, 'store'])->name('index.store');
Route::get('/contact/{id}/edit', [contactController::class, 'edit'])->name('edit');
Route::get('/contact/{id}/details', [contactController::class, 'details'])->name('details');

Route::post('/contact/create', [contactController::class, 'create'])->name('create');

Route::put('/contact/{id}/update', [contactController::class, 'update'])->name('update');

Route::delete('/contact/{id}/delete', [contactController::class, 'delete'])->name('delete');
