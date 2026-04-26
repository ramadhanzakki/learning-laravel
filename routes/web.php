<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'blogs' => [
        [
            'id'        => 1,
            'blogTitle' => 'Artikel Judul 1',
            'author'    => 'Muhammad Zakki Fitra Ramadhan',
            'body'      => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe molestias consequatur ipsa ex dicta recusandae at asperiores eveniet dolor blanditiis! Recusandae at id magnam alias dolore praesentium fugiat esse eum.'
        ],
        [
            'id'        => 2,
            'blogTitle' => 'Artikel Judul 2',
            'author'    => 'Muhammad Zakki Fitra Ramadhan',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eius impedit natus inventore. In sint explicabo quis nemo iusto illo, voluptatem consequatur nisi perferendis quidem ab cum ea debitis consectetur.'
        ]
    ]]);
});

Route::get('detail-blog/{id}', function($id) {
    $blogs = [
                [
                    'id'        => 1,
                    'blogTitle' => 'Artikel Judul 1',
                    'author'    => 'Muhammad Zakki Fitra Ramadhan',
                    'body'      => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe molestias consequatur ipsa ex dicta recusandae at asperiores eveniet dolor blanditiis! Recusandae at id magnam alias dolore praesentium fugiat esse eum.'
                ],
                [
                    'id'        => 2,
                    'blogTitle' => 'Artikel Judul 2',
                    'author'    => 'Muhammad Zakki Fitra Ramadhan',
                    'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eius impedit natus inventore. In sint explicabo quis nemo iusto illo, voluptatem consequatur nisi perferendis quidem ab cum ea debitis consectetur.'
                ]
            ];

    $blog = Arr::first($blogs, function($blog) use ($id){
        return $blog['id'] == $id;
    });

    return view('detail-blog', ['title' => 'Blog Detail', 'blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});