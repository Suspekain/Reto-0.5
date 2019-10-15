<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Ruta para la vista del formulario
Route::get("form", function(){
	return view('pages/form');
});
//Ruta para el controlador del formulario
Route::post('formControl', 'FormController@insert');