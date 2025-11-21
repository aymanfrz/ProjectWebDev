<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\AdvantageController;

// Public Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/project', function () {
    return view('project');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('createproduct', EditController::class);
    Route::resource('pageContents', PageContentController::class);
    Route::resource('advantages', AdvantageController::class);
    
    Route::get('/admin', function () {
        return view('admin/index');
    });
});

// Auth Routes (Laravel Breeze default)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';