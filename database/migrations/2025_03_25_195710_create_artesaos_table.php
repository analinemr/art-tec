<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artesaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->longText('biografia');
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cidade')->nullable();
            $table->string('fotografia')->nullable(); // aqui o campo da foto
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artesaos');
    }
};
