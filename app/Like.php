<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likeposts';
    protected $fillable = [
        'id',
        'user_id',
        'post_id'
    ];
}
