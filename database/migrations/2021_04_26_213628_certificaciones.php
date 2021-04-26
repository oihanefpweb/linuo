<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Certificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamp("fecha_inicio");
            $table->timestamp("fecha_fin")->nullable();
            $table->string("expedido_por")->nullable();
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
        Schema::dropIfExists('certificaciones');
    }
}
