<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->hasMany('App\Post');
    }
    protected $fillable = [
        'id',
        'category_name',
    ];
}
