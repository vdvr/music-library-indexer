<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userAlbums', function (Blueprint $table) {
            $table->integer('albumId')->unsigned();
            $table->string('username');
            $table->primary(['albumId', 'username']);
            $table->string('catNr')->nullable();
            $table->integer('rating')->nullable();
        });
        
        Schema::table('userAlbums', function($table) {
            $table->foreign('albumId')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('username')->references('username')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_albums');
    }
}
