<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Historico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Historico', function (Blueprint $table) {
            $table->increments('idHistorico');
            $table->string('HistoricoNombre', 45);
            $table->string('HistoricoDescripcion', 256);
            $table->string('HistoricoImagen', 45);
            $table->integer('HistoricoStock');
            $table->string('HistoricoEnlace', 45);
            $table->integer('HistoricoTienda');
            $table->dateTime('HistoricoFecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('Historico');
    }
}
