<?php

/*RUTAS*/

Route::get('/', function () {
    return view('pages/index');
});
//Ruta para la vista del formulario
Route::get("/form", 'productoController@mostrarTienda')->name('form.tienda');
//Ruta para el controlador del formulario
Route::get('/stock/{idTienda}', 'productoController@mostrarProductos')->name('stock.tienda');
Route::get('/stock/eliminar/{idProducto}', 'productoController@eliminarProducto')->name('stock.eliminar');
Route::get('/stock/editar/{idProducto}', 'productoController@editarProducto')->name('stock.editar');
Route::get('/stock/crear/{idTienda}', 'productoController@newProducto')->name('stock.crear');

//ruta al stock
Route::get('stock', function(){
	return view('pages/stock');
});

Route::get('registro',function(){
	return view('pages/registro');
});

//ruta a crear nuevo producto
Route::get('crear/{idTienda}',function($idTienda){
	$tienda = DB::table('Tiendas')->where('idTienda', $idTienda)->get();
	return view('pages/crear-producto', array('idTienda'=>$idTienda));
})->name('crear');
?>
