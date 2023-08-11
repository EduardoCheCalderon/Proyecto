<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cita_herramientas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('id_cita')->unsigned();
            $table->foreign('id_cita')->references('id')->on('citas');
            $table->bigInteger('id_herramienta')->unsigned();
            $table->foreign('id_herramienta')->references('id')->on('herramientas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita_herramientas');
    }
};
