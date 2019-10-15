<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->increments('idProducto');
            $table->string('ProductoNombre', 45);
            $table->string('ProductoDescripcion', 256);
            $table->string('ProductoImagen', 256);
            $table->integer('ProductoStock');
            $table->string('ProductoEnlace', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
    }
}
