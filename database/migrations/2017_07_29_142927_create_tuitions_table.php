<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->string('location_id');
            $table->string('bangla');
            $table->string('bangla_id');
            $table->string('subject');
            $table->string('contact');
            $table->string('gender');
            $table->string('salary');
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
        Schema::drop('tuitions');
    }
}
