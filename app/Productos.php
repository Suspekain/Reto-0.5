<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tiendas;

class Productos extends Model
{
	protected $table = 'Productos';
    public function tienda()
    {
        return $this->belongsTo('App\Tiendas', 'idTienda')->withPivot('idTienda');
    }
}
