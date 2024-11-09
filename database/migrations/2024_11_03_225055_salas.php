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
        Schema::create('salas', function (Blueprint $table) {
            $table->id(); // bigint unsigned
            $table->string('codigo', 50)->unique();
            $table->string('nombre', 100);
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->timestamp('fecha_creacion')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salas');
    }
};
