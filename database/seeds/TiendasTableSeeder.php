<?php

use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++){
        	DB::table('Tiendas')->insert([
	            'TiendaNombre' => 'Tienda'.($i+1)
        	]);
        }
    }
}
