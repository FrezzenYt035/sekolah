<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaController;

// Halaman utama
Route::get('/', function () {
    return view('user.beranda');
})->middleware(['auth', 'verified'])->name('beranda');

// Route::get('/dummy', function () {
//     return view('dummy');
// })->middleware(['auth', 'verified'])->name('dummy');

Route::get('/dummy', [SiswaController::class, 'index'])->name('dummy');

// Halaman statis lainnya
Route::get('/biodata', fn() => view('biodata'))->middleware(['auth', 'verified'])->name('biodata');
Route::get('/about', fn() => view('about'))->middleware(['auth', 'verified'])->name('about');
Route::get('/creation', fn() => view('user.creation'))->middleware(['auth', 'verified'])->name('creation');
Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/buku_tamu', [ProductController::class, 'index'])->name('buku_tamu'); // tampil semua data
    Route::post('/produk/store', [ProductController::class, 'store'])->name('produk.store'); // simpan data
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy'); // hapus data
});

// 📦 ROUTE PRODUK (Album)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/album', [ProductController::class, 'index'])->name('album'); // tampil semua data
});

// 👤 ROUTE PROFILE (bawaan Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
