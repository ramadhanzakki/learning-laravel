<?php

use App\Models\Blog;
use Illuminate\Support\Arr;
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

Route::get('/detail-blog/{blog}', function(Blog $blog) {
    return view('detail-blog', ['title' => 'Blog Detail', 'blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});