<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas', function (Blueprint $table) {
            $table->id();
            $table->string('Usuario');
            $table->string('Ubicacion');
            $table->string('Tipo_Solicitud');
            $table->date('Fecha');
            $table->string('Descripcion');
            $table->string('Serial');
            $table->string('Equipo');
            $table->string('Responsable');
            $table->string('Version');
            $table->string('Observacion');
            $table->string('Documento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acta');
    }
};
