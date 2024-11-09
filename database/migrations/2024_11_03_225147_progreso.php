<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('progreso', function (Blueprint $table) {
            $table->id(); // bigint unsigned
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('salas_id')->constrained('salas')->onDelete('cascade');
            $table->string('tema', 100);
            $table->string('mini_juego', 45);
            $table->integer('nivel');
            $table->integer('puntuacion');
            $table->time('tiempo_practica');
            $table->timestamp('fecha')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('progreso');
    }
};
