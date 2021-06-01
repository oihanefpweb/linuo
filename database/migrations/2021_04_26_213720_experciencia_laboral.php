<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExpercienciaLaboral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia', function (Blueprint $table) {
            $table->id();
            $table->string('puesto');
            $table->string('nombre');
            $table->string('tipo_contrato');
            $table->string('descripcion')->nullable();
            $table->string('localizacion')->nullable();
            $table->timestamp("fecha_inicio");
            $table->timestamp("fecha_fin")->nullable();
            $table->unsignedBigInteger("persona");
            $table->foreign("persona")->references("id")->on("persona")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("experiencia");
    }
}
