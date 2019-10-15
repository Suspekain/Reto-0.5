<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function insert(Request $request){
		$request->validate([
			'tienda'=>'required']
		);

        //codigo para hacer la consulta

    	return view('welcome');
    }
}
