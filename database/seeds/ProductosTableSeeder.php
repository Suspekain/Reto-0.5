<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++){
          DB::table('Productos')->insert([
            'ProductoNombre' => 'nombrePrueba'.($i+1),
            'ProductoDescripcion' => 'hola este es el producto'.($i+1),
            'ProductoImagen' => 'gafasol.jpg',
            'ProductoStock' => random_int(1,100),
            'ProductoEnlace' => 'PruebaEnlace',
            'ProductoTienda' => 1,
          ]);
        }
    }
}
