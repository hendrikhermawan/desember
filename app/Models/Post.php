<?php

// tulis menggunakan teknik namespace untuk mengenal class Post
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// menggunakan extends model untuk mengambil data dari db sqlite tanpa harus mengisi seluruh data array
class  Post extends Model
{
    // 1. kita ganti nama tabel di dalam database dengan nama blog_posts 
    // protected $table = 'blog_posts';
    // protected $tabel = 'post_id';
    // // public static function all()
    // // {
    // //     return [
    // //         [
    // //             'id' => 1,
    // //             'title' => 'Project 1',
    // //             'author' => 'Hendrik Hermawan',
    // //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    // //         Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
    // //         cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
    // //         ],
    // //         [
    // //             'id' => 2,
    // //             'title' => 'Project 2',
    // //             'author' => 'Luka Modric',
    // //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    // //         Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
    // //         cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
    // //         ],
    // //         [
    // //             'id' => 3,
    // //             'title' => 'Project 3',
    // //             'author' => 'sergio ramos',
    // //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    // //         Voluptatibus maiores asperiores ullam reprehenderit dignissimos dolore officiis voluptatum, 
    // //         cumque, quidem ipsam unde veritatis consequuntur modi nihil molestiae dolorum labore dolorem molestias!'
    // //         ]
    // //     ];
    // // }

    
    // // public static function find($id): array
    // // {

    // //     // return Arr::first(static::all(), function ($post) use ($id) {
    // //     //     return $post['id'] == $id;
    // //     // });
        
    // //     // menggunakan arrow function
    // //     // return Arr::first(static::all(), fn($post) => $post['id'] == $id);
    // //     //     return $post['id'] == $id;
        
    // //     $post = Arr::first(static::all(), fn($post) => $post['id'] == $id);
        
    // //     if($post) {
    // //         return $post;
    // //     } else {
    // //         abort(404);
    // //     };


        
        
    // }
}
