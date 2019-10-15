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
            $table->string('ProductoImagen', 45);
            $table->integer('ProductoStock');
            $table->string('ProductoEnlace', 45);
            $table->unsignedInteger('ProductoTienda');
            //referencia para crear la clave ajena
            $table->foreign('ProductoTienda')->references('idTienda')->on('Tiendas');
            
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
        Schema::dropIfExists('Productos');
    }
}
