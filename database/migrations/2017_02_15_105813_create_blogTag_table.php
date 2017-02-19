<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogtag', function (Blueprint $table) {
            $table->string('email');
            $table->integer('blogid');
            $table->string('tag_name');
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('blogid','tag_name'));
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('blogid')->references('blog_id')->on('blogs');
            $table->foreign('tag_name')->references('tags')->on('tag_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogtag');
    }
}
