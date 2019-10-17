<?php

/*RUTAS*/

Route::get('/', function () {
    return view('pages/index');
});
//Ruta para la vista del formulario
Route::get("form", function(){
	return view('pages/form');
});
//Ruta para el controlador del formulario
Route::post('formControl', 'FormController@insert');

//ruta al stock
Route::get('stock', function(){
	return view('pages/index');
});
<<<<<<< HEAD
Route::get('registro',function(){
	return view('pages/registro');
});
?>
=======
?>
>>>>>>> 0a5bb9ed0dead6005c290c29aa4a7ba9e5de1574
