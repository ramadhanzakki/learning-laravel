<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Blogs {

    public static function all(){
        return [
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
    }

    public static function find($id){
        $blog = Arr::first(static::all(), function($blog) use ($id){
            return $blog['id'] == $id;
        });

        if (! $blog) {
            abort(404);
        }

        return $blog;
    }
}