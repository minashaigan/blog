<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIplikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iplike', function (Blueprint $table) {
            $table->string('ip_address',45);
            $table->integer('post_id');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['deleted_at']);
        });

        Schema::table('iplike', function($table) {
            $table->foreign('post_id')
                ->references('post_id')
                ->on('posts')
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
        Schema::dropIfExists('iplike');
    }
}
