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
            $table->increments('id');
            $table->string('title');
            $table->string('ncientifico')->nullable();
            $table->string('url')->unique()->nullable();
            $table->mediumText('excerpt')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('area_id')->nullable();
            $table->unsignedInteger('lugar_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->String('ubicacion')->nullable();

            $table->string('ownername')->nullable();
            $table->string('ownerapaterno')->nullable();
            $table->string('owneramaterno')->nullable();
            $table->string('ownerarea')->nullable();
            $table->string('ownerestado')->nullable();
            $table->string('ownerciudad')->nullable();
            $table->string('ownercorreo')->nullable();
            $table->string('ownerurl')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
