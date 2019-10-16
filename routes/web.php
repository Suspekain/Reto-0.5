<?php

/*RUTAS*/

Route::get('/', 'productoController@index')->name('index');
//Ruta para la vista del formulario
Route::get("/form", 'productoController@mostrarTienda')->name('form.tienda');
//Rutas para el controlador de producto
Route::get('/stock/{idTienda}', 'productoController@mostrarProductos')->name('stock.tienda');
Route::get('/stock/eliminar/{idProducto}', 'productoController@eliminarProducto')->name('stock.eliminar');
Route::get('/stock/editar/{idProducto}', 'productoController@editarProducto')->name('stock.editar');
Route::get('/stock/update/{idProducto}', 'productoController@updateProducto')->name('stock.update');
Route::post('/stock/crear/{idTienda}', 'productoController@newProducto')->name('stock.crear');
//ruta para un producto
Route::get('/producto/{idProducto}', 'productoController@mostrarProducto')->name('producto.mostrar');

//ruta al stock
Route::get('stock', function(){
  return view('pages/stock');
});

Route::get('registro',function(){
  return view('pages/registro');
});
//ruta editar producto
Route::get('editar/{idProducto}',function(){
  return view('pages/editar-producto');
})->name('editar');

//ruta a crear nuevo producto
Route::get('crear/{idTienda}',function($idTienda){
  $tienda = DB::table('Tiendas')->where('idTienda', $idTienda)->get();
  return view('pages/crear-producto', array('idTienda'=>$idTienda));
})->name('crear');

//ruta vista producto
Route::get('producto',function(){
  return view('pages/producto');
});
?>
