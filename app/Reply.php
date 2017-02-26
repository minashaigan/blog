<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'commentreply';
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function comment()
    {
        return $this->belongsTo('App\Comment','comment_id','id');
    }
    protected $fillable = [
        'user_id',
        'comment_id',
        'comment',
        'created_at'
    ];
}
