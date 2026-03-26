<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});

// Route::get('posts/{id}', function ($id) {
// Route::get('posts/{slug}', function ($slug) {
Route::get('posts/{post:slug}', function (Post $post) {

    // $post = Post::find($slug);

    // if(! $post) {
    //     abort(404);
    // }

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', [
        'title' => 'Article By. ' . $user->name,
        'posts' => $user->posts
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
