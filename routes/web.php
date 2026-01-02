<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// coba bikin view baru dengan nama about
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

// buat route baru dengan nama blog dan contact

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});




