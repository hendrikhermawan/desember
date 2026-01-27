<?php 

// tulis menggunakan teknik namespace untuk mengenal class Post
namespace App\Models;

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

?>