<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// coba bikin view baru dengan nama about
Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home',['nama' => 'Hendrik Hermawan']);
});

// buat route baru dengan nama blog dan contact

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});




