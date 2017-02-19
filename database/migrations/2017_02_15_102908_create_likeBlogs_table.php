<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeblog', function (Blueprint $table) {
            $table->string('email');
            $table->integer('blogid');
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('email', 'blogid'));
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('blogid')->references('blog_id')->on('blogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likeblog');
    }
}
