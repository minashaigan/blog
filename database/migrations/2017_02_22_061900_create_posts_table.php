<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('post_name');
            $table->longText('content');
            $table->integer('category_id')->unsigned();
            $table->timestamps();

            /*
            * If you soft delete
            * something it is still there so it's able to be
            * recovered (un-deleted) Hard delete,
            * or permanent delete, deletes it
            * off your database for good.
            * So you would not be able
            * to get that post back !
            * unless you had a backup
            */
            $table->softDeletes();
            $table->index(['deleted_at']);
        });

        Schema::table('posts', function($table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
