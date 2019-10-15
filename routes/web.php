<?php

/*RUTAS*/

Route::get('/', function () {
    return view('pages/index');
});
//Ruta para la vista del formulario
Route::get("pages/form", 'formController@mostrar')->name('form');
//Ruta para el controlador del formulario
Route::post('formControl', 'FormController@insert');

//ruta al stock
Route::get('stock', function(){
	return view('pages/index');
});

Route::get('registro',function(){
	return view('pages/registro');
});
?>