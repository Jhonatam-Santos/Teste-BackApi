<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevTable extends Migration
{

    public function up()
    {
        Schema::create('devs', function (Blueprint $table) {
            $table->increments('dev_id');
            $table->string('name');
            $table->string('username');
            $table->string('bio');
            $table->integer('followers');
            $table->integer('following');
            $table->integer('stars');
            $table->string('organization');
            $table->string('location');
            $table->string('email');
            $table->string('link');
            $table->string('web');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('devs');
    }
}
