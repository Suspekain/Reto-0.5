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
        	DB::table('Tiendas')->insert([
	            'TiendaNombre' => 'Afflelou',
                'TiendaLogo'=>'afflelou.png',
        	]);
    }
}
