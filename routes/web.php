<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'blogs' => Blog::filter(request(['search']))->latest()->get()]);
});

Route::get('/detail-blog/{blog:slug}', function(Blog $blog) {
    return view('detail-blog', ['title' => 'Blog Detail', 'blog' => $blog]);
});

Route::get('/author/{user:username}', function(User $user) {
    $blogs = $user->blogs->load('category', 'author');
    return view('blog', ['title' => count($blogs) . ' Articles by ' . $user->name, 'blogs' => $blogs]);
});

Route::get('/category/{category:slug}', function(Category $category) {
    $blogs = $category->blogsWithCategory->load('category', 'author');

    return view('blog', [
        'title' => count($blogs) . ' Articles with ' . $category->name_category,
        'blogs' => $blogs
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});