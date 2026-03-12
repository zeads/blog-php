<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel Pertama',
            'author' => 'Ruri Pelinandang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Magnam molestias unde libero velit cumque eligendi tenetur natus accusamus totam,
            laborum quibusdam ad? Tempora, iusto expedita quis laborum necessitatibus iure quidem?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel kedua',
            'author' => 'Ruri Pelinandang',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quae Eveniet delectus iste ullam, ut ducimus recusandae culpa libero.
            Nihil odio quidem, beatae unde ratione totam eligendi animi delectus autem dolorum tempore?'
        ]
    ];
    return view('blog', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});

Route::get('posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel Pertama',
            'author' => 'Ruri Pelinandang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Magnam molestias unde libero velit cumque eligendi tenetur natus accusamus totam,
            laborum quibusdam ad? Tempora, iusto expedita quis laborum necessitatibus iure quidem?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel kedua',
            'author' => 'Ruri Pelinandang',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quae Eveniet delectus iste ullam, ut ducimus recusandae culpa libero.
            Nihil odio quidem, beatae unde ratione totam eligendi animi delectus autem dolorum tempore?'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    // dd($post);
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});



Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});
