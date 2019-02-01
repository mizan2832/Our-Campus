<?php

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
            $table->increments('id');
             $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->integer('count');
            // $table->string('image')->nullable();;

            $table->timestamps();
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade') ->onUpdate('cascade');

        });

            Schema::table('posts', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('posts');
      
    }
}
