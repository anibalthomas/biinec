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
            $table->timestamp('fechan')->nullable();
            $table->unsignedInteger('estado_id')->nullable();
            $table->unsignedInteger('ciudad_id')->nullable();
            $table->string('url')->nullable();
            $table->string('avatar')->default('default.png');
            $table->string('password')->nullable();
            $table->boolean('active')->default(false);
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
