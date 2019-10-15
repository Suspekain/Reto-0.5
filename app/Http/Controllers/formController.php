<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use App\Tiendas;
use App\Productos;

class FormController extends Controller
{
    public function mostrarTienda(){
		//codigo para hacer la consulta
		$tiendas = DB::table('Tiendas')->get();
    	return view('pages/form', array('tiendas'=>$tiendas));
    }

    public function mostrarProductos($idTienda)
    {
        //Recogemos el id de la tienda pasado por la ruta, recogemos los datos de la tienda en un array y los productos de esa tienda en otro y se lo pasamos a la vista stock
    	$tienda = Tiendas::where('idTienda', $idTienda)->get();
    	$productos = Productos::where('ProductoTienda', $tienda[0]->idTienda)->get();
    	return view('pages/stock', array('productos'=>$productos), array('idTienda'=>$tienda[0]));
    }

    public function eliminarProducto($idProducto)
    {
        //Recoge el id del producto pasada por la ruta y elimina el producto con ese id en la tabla productos
    	Productos::where('idProducto',$idProducto)->delete();
    	return back();
    }

    public function editarProducto($idProducto)
    {
    	
    }

    public function newProducto(Request $request)
    {
        $producto = new Productos();
        $producto->ProductoNombre = htmlentities($request->input('nombre'));
        $producto->ProductoDescripcion = htmlentities($request->input('desc'));
        $aseo->img = $request->input('img');
        $aseo->dir = htmlentities($request->input('dir'));
        $aseo->horas24 = $request->input('24h')==1;
    }
}
