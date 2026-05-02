<?php

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'blogs' => Blog::all()]);
});

Route::get('/detail-blog/{blog:slug}', function(Blog $blog) {
    return view('detail-blog', ['title' => 'Blog Detail', 'blog' => $blog]);
});

Route::get('/author/{user}', function(User $user) {
    return view('blog', ['title' => 'Articles by ' . $user->name, 'blogs' => $user->blogs]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});