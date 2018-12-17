<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
		Permission::create([
			'name' => 'Navegar usuario',
			'slug' => 'users.index',
			'description' => 'Lista y navega por todos los usuarios del sistema',
			
		]);
		Permission::create([
			'name' => 'Ver detalle usuario',
			'slug' => 'users.show',
			'description' => 'Ver detalle de un usuario del sistema',
			
		]);
		Permission::create([
			'name' => 'Editar usuario',
			'slug' => 'users.edit',
			'description' => 'Editar detalle de un usuario del sistema',
			
		]);
		
		Permission::create([
			'name' => 'Eliminar usuario',
			'slug' => 'users.destroy',
			'description' => 'Eliminar un usuario del sistema',
			
		]);
		
		//roles
		Permission::create([
			'name' => 'Navegar roles',
			'slug' => 'roles.index',
			'description' => 'Lista y navega por todos los roles del sistema',
			
		]);
		Permission::create([
			'name' => 'Ver detalle rol',
			'slug' => 'roles.show',
			'description' => 'Ver detalle de un roles del sistema',
			
		]);
		Permission::create([
			'name' => 'Editar rol',
			'slug' => 'roles.edit',
			'description' => 'Editar detalle de un rol del sistema',
			
		]);
		
		Permission::create([
			'name' => 'Eliminar rol',
			'slug' => 'roles.destroy',
			'description' => 'Eliminar un rol del sistema',
			
		]);
		
		//Aliments
		Permission::create([
			'name' => 'Navegar alimentos',
			'slug' => 'aliments.index',
			'description' => 'Lista y navega por todos los alimentos del sistema',
			
		]);
		Permission::create([
			'name' => 'Ver detalle alimento',
			'slug' => 'aliments.show',
			'description' => 'Ver detalle de un alimento del sistema',
			
		]);
		Permission::create([
			'name' => 'Editar alimento',
			'slug' => 'aliments.edit',
			'description' => 'Editar detalle de un alimento del sistema',
			
		]);
		
		Permission::create([
			'name' => 'Eliminar alimento',
			'slug' => 'aliments.destroy',
			'description' => 'Eliminar un alimento del sistema',
			
		]);
		
		//Menus
		Permission::create([
			'name' => 'Navegar menus',
			'slug' => 'menus.index',
			'description' => 'Lista y navega por todos los menus del sistema',
			
		]);
		Permission::create([
			'name' => 'Ver detalle mennu',
			'slug' => 'menus.show',
			'description' => 'Ver detalle de un mennu del sistema',
			
		]);
		Permission::create([
			'name' => 'Editar usuario',
			'slug' => 'menus.edit',
			'description' => 'Editar detalle de un mennu del sistema',
			
		]);
		
		Permission::create([
			'name' => 'Eliminar usuario',
			'slug' => 'menus.destroy',
			'description' => 'Eliminar un mennu del sistema',
			
		]);
		
		//Events
		Permission::create([
			'name' => 'Navegar eventos',
			'slug' => 'events.index',
			'description' => 'Lista y navega por todos los eventos del sistema',
			
		]);
		Permission::create([
			'name' => 'Ver detalle evento',
			'slug' => 'events.show',
			'description' => 'Ver detalle de un evento del sistema',
			
		]);
		Permission::create([
			'name' => 'Editar evento',
			'slug' => 'events.edit',
			'description' => 'Editar detalle de un evento del sistema',
			
		]);
		
		Permission::create([
			'name' => 'Eliminar evento',
			'slug' => 'events.destroy',
			'description' => 'Eliminar un evento del sistema',
			
		]);
		
		
		
    }
}
