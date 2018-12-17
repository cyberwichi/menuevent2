<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
     protected $fillable = [
        'precio', 'nombre',
    ];
	public function events()
	{
		return $this->belongsToMany(Event::class, 'menu_events')
			->withPivot(['cantidad', 'comentario']);
	}
	public function aliments()
	{
		return $this->belongsToMany(Aliment::class, 'menu_aliments'); 
	}
}
