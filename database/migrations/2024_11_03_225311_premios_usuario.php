<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('premios_usuario', function (Blueprint $table) {
            $table->id(); // bigint unsigned
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('premio_id')->constrained('premios')->onDelete('cascade');
            $table->timestamp('fecha_desbloqueo')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('premios_usuario');
    }
};
