<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Productos', function (Blueprint $table) {
            $table->unsignedInteger('ProductoTienda');

            $table->foreign('ProductoTienda')->references('idTienda')->on('Tiendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Productos', function (Blueprint $table) {
            $table->dropForeign('Productos_Tiendas_id_foreign');

            $table->dropColumn('ProductoTienda');
        });

    }
}
