<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public function post()
    {
        return $this->belongsTo('App\Post','post_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    protected $fillable = [
        'post_id',
        'user_id',
        'comment'
    ];
}
