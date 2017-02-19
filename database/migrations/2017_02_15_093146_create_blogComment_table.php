<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBlogCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogcomment', function (Blueprint $table) {
            $table->string('email');
            $table->integer('blogid');
            $table->longText('comment');
            $table->increments('comment_no');
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('blogid')->references('blog_id')->on('blogs');
            
        });
        DB::statement('ALTER TABLE  `blogcomment` DROP PRIMARY KEY , ADD PRIMARY KEY (  `comment_no` ,  `blogid` ) ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogcomment');
    }
}
