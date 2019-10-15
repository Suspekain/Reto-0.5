<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Productos;

class Tiendas extends Model
{
	protected $table = 'Tiendas';
    public function producto()
    {
        return $this->hasMany('App\Productos');
    }
}
