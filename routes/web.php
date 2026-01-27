<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


class  Post{
    public static function all(){
        return [
        [
            'id' => 1,
            'title' => 'Project 1',
            'author' => 'Hendrik Hermawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
            cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
        ],
        [
            'id' => 2,
            'title' => 'Project 2',
            'author' => 'Luka Modric',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
            cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
        ],
        [
            'id' => 3,
            'title' => 'Project 3',
            'author' => 'sergio ramos',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
            cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
        ]
    ];
    }
}


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
