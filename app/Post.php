<?php

namespace App;

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    public function categories()
    {
        return $this->belongsTo('App\Category','category_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment','post_id','post_id');
    }
    public function likes()
    {
        return $this->hasMany('App\Like','post_id','post_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag','post_tag','post_id','tag_id','post_id','id');
    }
    protected $fillable = [
        'post_name',
        'content',
        'category_id',
        'created_at'
    ];
}
