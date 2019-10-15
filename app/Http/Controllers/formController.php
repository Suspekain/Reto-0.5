<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Tiendas;
use App\Productos;

class FormController extends Controller
{
    public function mostrarTienda(){
		//codigo para hacer la consulta
		$tiendas = DB::table('Tiendas')->get();
    	return view('pages/form', array('tiendas'=>$tiendas));
    }

    public function mostrarProductos($nombreTienda)
    {
    	$idTienda = DB::table('Tiendas')->where('TiendaNombre', $nombreTienda)->get();
    	$productos = DB::table('Productos')->get();
    	return view('pages/stock', array('productos'=>$productos));
    }
}
