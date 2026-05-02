<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Blog extends Model{
    protected $table = 'blog_posts';
    protected $fillable = ['blogTitle', 'author', 'slug', 'body'];
}