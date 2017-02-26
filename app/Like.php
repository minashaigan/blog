<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'iplike';
    protected $fillable = [
        'post_id',
        'ip_address'
    ];
}
