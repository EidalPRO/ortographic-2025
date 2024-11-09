<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id(); // bigint unsigned
            $table->string('tema', 100);
            $table->text('contenido');
            $table->string('respuesta', 100);
            $table->string('distractor_1', 100);
            $table->string('distractor_2', 100);
            $table->enum('dificultad', ['Facil', 'Intermedio', 'Dificil']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
};
