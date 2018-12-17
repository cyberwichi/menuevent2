<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'cantidad',
	 ];
	
	public function menus()
	{
		return $this->belongsToMany(Aliment::class, 'menu_aliments'); 
	}
}
