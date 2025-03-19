<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/detail', function () {
    return view('product_detail');
})->name('detail');

Route::get('/hire-company', function () {
    return view('hire_company');
})->name('hire-company');

Route::get('/Pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/blog-detail', function () {
    return view('blog_detail');
})->name('blog-detail');

Route::get('/search-result', function () {
    return view('search-result');
})->name('search.result');

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('index');

// Registeration routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Verification routes
Route::controller(VerificationController::class)->group(function () {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});