<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = [
        'dia', 'nombre', 'cantidad', 'comentario', 
    ];
	public function menus()
	{
		return $this->belongsToMany(Menu::class, 'menu_events')
			->withPivot(['cantidad', 'comentario']);
	}
}
