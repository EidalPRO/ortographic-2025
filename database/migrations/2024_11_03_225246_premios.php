<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('premios', function (Blueprint $table) {
            $table->id(); // bigint unsigned
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->integer('nivel_necesario');
        });
    }

    public function down()
    {
        Schema::dropIfExists('premios');
    }
};
