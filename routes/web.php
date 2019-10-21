<?php

/*RUTAS*/

Route::get('/', function () {
    return view('pages/index');
});
//Ruta para la vista del formulario
Route::get("/form", 'formController@mostrarTienda')->name('form.tienda');
//Ruta para el controlador del formulario
Route::get('/stock/{nombreTienda}', 'formController@mostrarProductos')->name('stock.tienda');
Route::get('/stock/eliminar/{idProducto}', 'formController@eliminarProducto')->name('stock.eliminar');
Route::get('/stock/editar/{idProducto}', 'formController@editarProducto')->name('stock.editar');

//ruta al stock
Route::get('stock', function(){
	return view('pages/stock');
});

Route::get('registro',function(){
	return view('pages/registro');
});

//ruta a crear nuevo producto
Route::get('crear', function(){
	return view('pages/crear-producto');
});

?>
