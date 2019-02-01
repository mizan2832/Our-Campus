<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('department');
            $table->string('email');
            $table->string('department_id')->unique();
            $table->string('image');
            $table->integer('user_id');
            $table->string('district');
            $table->string('session');
            $table->string('birthday');

            $table->string('area');
            $table->integer('contact');
            $table->string('last_donat');
            $table->string('slogan');
            $table->string('status');
            $table->string('group');
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
