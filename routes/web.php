<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [ThemeController::class, 'view'])->name('dashboard');
Route::get('/home', [ThemeController::class, 'home'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    Route::get('/cart', [CartController::class, 'viewCart'])->name('viewCart');
    // Route::get('/show_cart', [CartController::class, 'showCart'])->name('showCart');
    Route::post('/add_to_cart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/view_products', [ProductController::class, 'viewProducts'])->name('viewProducts');

require __DIR__.'/auth.php';
