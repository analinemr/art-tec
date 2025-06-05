<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtesaosTable extends Migration
{
    public function up()
    {
        Schema::create('artesaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique();
            $table->text('biografia')->nullable();
            $table->string('email')->nullable();
            $table->string('cidade')->nullable();
            $table->string('fotografia')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artesaos');
    }
}
