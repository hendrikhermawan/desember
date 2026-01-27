<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


// coba bikin view baru dengan nama about
Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Hendrik Hermawan']);
});

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

// buat route baru dengan nama projects dan contact

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects', 'posts' => Post::all()]); //tarik data dari class Post
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

// buat route untuk wild card id posts (lihat detail seperti show more dan detail)

Route::get('/posts/{id}', function ($id) {

    // cari id posts menggunakan array helper laravel
    $post = Arr::first(Post::all(), function ($post) use ($id) {
        return $post['id'] == $id;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
