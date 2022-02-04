<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GambarProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Home

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('tentang', [HomeController::class, 'tentang'])->name('home.tentang');
Route::get('kontak', [HomeController::class, 'kontak'])->name('home.kontak');
Route::get('produk', [HomeController::class, 'produk'])->name('home.produk');
Route::get('produk/{slug}', [HomeController::class, 'produkId'])->name('home.produk.id');
Route::get('produk/kategori/{kategori}', [HomeController::class, 'produkKategori'])->name('home.produk.kategori');
Route::get('myprofile/{id}', [HomeController::class, 'myprofile'])->name('home.myprofile');
Route::put('updateprofile/{id}', [HomeController::class, 'updateProfile'])->name('home.updateprofile');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('regist', [AuthController::class, 'regist'])->name('regist');
Route::post('auth', [AuthController::class, 'auth'])->name('auth');
Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'MustAdmin'])->group(function () {

    Route::prefix('admin')->group(function(){
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::resource('produk', ProdukController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('gambar_produk', GambarProdukController::class);
        Route::resource('user', UserController::class);

    });
    
});