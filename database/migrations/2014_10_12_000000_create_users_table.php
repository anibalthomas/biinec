<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellidop')->nullable();
            $table->string('apellidom')->nullable();
            $table->string('genero')->nullable();
            $table->string('email')->unique();
            $table->unsignedInteger('area_id')->nullable();
            $table->date('fecha')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('URL')->nullable();
            $table->string('avatar')->default('default.png');
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
