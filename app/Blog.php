<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'blog_id';

}
