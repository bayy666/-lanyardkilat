<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Produk
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/produk/{slug}', [HomeController::class, 'produkShow'])->name('produk.show');

// Halaman Blog
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

// Halaman Testimoni
Route::get('/testimoni', [HomeController::class, 'testimoni'])->name('testimoni');

// Halaman Tentang Kami
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

// Halaman Portfolio
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

// Halaman Kontak
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [HomeController::class, 'submitKontak'])->name('kontak.submit');
