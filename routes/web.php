<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// coba bikin view baru dengan nama about
Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama'=>'Hendrik Hermawan']);
});

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

// buat route baru dengan nama blog dan contact

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects', 'posts' =>[
        [
            'title' => 'Project 1',
            'author' => 'Hendrik Hermawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
            cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
        ],
        [
            'title' => 'Project 2',
            'author' => 'Luka Modric',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
            cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});




