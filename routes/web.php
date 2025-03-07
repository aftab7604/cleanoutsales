<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

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

