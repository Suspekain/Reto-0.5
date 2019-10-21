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

  public function mostrarProductos($nombreTienda)
  {
    $idTienda = DB::table('Tiendas')->where('TiendaNombre', $nombreTienda)->get();
    $productos = DB::table('Productos')->where('ProductoTienda', $idTienda[0]->idTienda)->get();
    return view('pages/stock', array('productos'=>$productos), array('idTienda'=>$idTienda[0]));
  }

  public function eliminarProducto($idProducto)
  {
    var_dump($idProducto);
    Productos::where('idProducto',$idProducto)->delete();
    return back();
  }

  public function editarProducto($idProducto)
  {

  }

  public function insertar(Request $request, $nombreTienda)
  {
    echo "insertar en la BBDD";
  }
}
