<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//Home

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('tentang', [HomeController::class, 'tentang'])->name('home.tentang');
Route::get('kontak', [HomeController::class, 'kontak'])->name('home.kontak');
Route::get('produk', [HomeController::class, 'produk'])->name('home.produk');

Route::get('admin-login', [AuthController::class, 'index'])->name('login');
