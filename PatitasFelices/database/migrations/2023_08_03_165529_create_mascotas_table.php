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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->bigInteger('id_especie')->unsigned();
            $table->foreign('id_especie')->references('id')->on('especies');
            $table->bigInteger('id_raza')->unsigned();
            $table->foreign('id_raza')->references('id')->on('razas');
            $table->integer('edad');
            $table->date('fecha_nacimiento')->nullable();
            $table->bigInteger('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->longText('observaciones')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
