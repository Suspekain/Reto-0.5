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