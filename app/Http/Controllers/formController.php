<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Tiendas;

class FormController extends Controller
{
    public function mostrar(Request $request){
		//codigo para hacer la consulta
		$tiendas = DB::table('Tiendas')->get();
    	return view('pages/form', array('tiendas'=>$tiendas));
    }
}
