<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/blog', function () {
    $posts = [
        [
            'title' => 'Judul Artikel Pertama',
            'author' => 'Ruri Pelinandang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Magnam molestias unde libero velit cumque eligendi tenetur natus accusamus totam,
            laborum quibusdam ad? Tempora, iusto expedita quis laborum necessitatibus iure quidem?'
        ],
        [
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
