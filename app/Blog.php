<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'blog_id';
    protected $fillable = [
        'blog_id',
        'blog_name',
        'content',
        'category',
        'like_count'
    ];
}
