<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use App\Tiendas;
use App\Productos;

class productoController extends Controller
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
        //recoger el id del producto y le pasa el objeto producto con todos los datos del producto equivalente al id que recibimos a la vista editar-producto
        $producto=Productos::where('idProducto',$idProducto)->first();
        return view('pages/editar-producto', array('producto'=>$producto));

    }

    public function updateProducto(Request $request)
    {
        //recibimos los datos del formulario por parametro y realizamos un query en la tabla productos donde el id equivale al recibido desde el formulario, actualizamos el stock y volvemos a la vista del stock de la tienda
        $producto = DB::table('Productos')
              ->where('idProducto', $request->input('idProducto'))
              ->update(['ProductoStock' => $request->input('stock')]);
        $pUpdated = Productos::where('idProducto', $request->input('idProducto'))->first();
        return redirect()->route('stock.tienda', $pUpdated->ProductoTienda);

    }

    public function newProducto(Request $request)
    {
        //Crea un nuevo objeto del modelo Productos en el cual guardamos los datos recogidos por parametro y lo guardamos en la base de datos, una vez realizado esto volvemos a la vista del stock de la tienda pasandole el id de la tienda
        $producto = new Productos();
        $producto->ProductoNombre = $request->input('nombre');
        $producto->ProductoDescripcion = $request->input('desc');
        //imagen
        $producto->ProductoImagen = $request->file('img')->getClientOriginalName();
        $request->file('img')->move('img/productos', $producto->ProductoImagen);
        //
        $producto->ProductoStock = $request->input('stock');
        $producto->ProductoEnlace = $request->input('enlace');
        $producto->ProductoTienda = $request->input('idTienda');

        $producto->save();
        return redirect()->route('stock.tienda', $producto->ProductoTienda);
    }

}
