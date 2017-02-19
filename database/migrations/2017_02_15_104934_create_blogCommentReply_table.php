<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogcommentreply', function (Blueprint $table) {
            $table->string('email');
            $table->integer('blogid');
            $table->longText('comment');
            $table->integer('comment_no');
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('blogid','comment_no','email'));
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('blogid')->references('blog_id')->on('blogs');
            $table->foreign('comment_no')->references('comment_no')->on('blogcomment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogcommentreply');
    }
}
