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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//routes

Route::middleware(['auth'])->group(function() {
	
	//Roles
	
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');
	
	Route::get('roles', 'RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');
	
	Route::get('roles/create', 'RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');
	
	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
			->middleware('permission:roles.edit');
	
	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');
	
	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');
	
	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');
	
		//aliments
	
	Route::post('aliments/store', 'AlimentController@store')->name('aliments.store')
			->middleware('permission:aliments.create');
	
	Route::get('aliments', 'AlimentController@index')->name('aliments.index')
			->middleware('permission:aliments.index');
	
	Route::get('aliments/create', 'AlimentController@create')->name('aliments.create')
			->middleware('permission:aliments.create');
	
	Route::put('aliments/{aliment}', 'AlimentController@update')->name('aliments.update')
			->middleware('permission:aliments.edit');
	
	Route::get('aliments/{aliment}', 'AlimentController@show')->name('aliments.show')
			->middleware('permission:aliments.show');
	
	Route::delete('aliments/{aliment}', 'AlimentController@destroy')->name('aliments.destroy')
			->middleware('permission:aliments.destroy');
	
	Route::get('aliments/{aliment}/edit', 'AlimentController@edit')->name('aliments.edit')
			->middleware('permission:aliments.edit');
	

		//menus
	
	Route::post('menus/store', 'MenuController@store')->name('menus.store')
			->middleware('permission:menus.create');
	
	Route::get('menus', 'MenuController@index')->name('menus.index')
			->middleware('permission:menus.index');
	
	Route::get('menus/create', 'MenuController@create')->name('menus.create')
			->middleware('permission:menus.create');
	
	Route::put('menus/{menu}', 'MenuController@update')->name('menus.update')
			->middleware('permission:menus.edit');
	
	Route::get('menus/{menu}', 'MenuController@show')->name('menus.show')
			->middleware('permission:menus.show');
	
	Route::delete('menus/{menu}', 'MenuController@destroy')->name('menus.destroy')
			->middleware('permission:menus.destroy');
	
	Route::get('menus/{menu}/edit', 'MenuController@edit')->name('menus.edit')
			->middleware('permission:menus.edit');
	
	
		//Events
	
	Route::post('events/store', 'EventController@store')->name('events.store')
			->middleware('permission:events.create');
	
	Route::get('events', 'EventController@index')->name('events.index')
			->middleware('permission:events.index');
	
	Route::get('events/create', 'EventController@create')->name('events.create')
			->middleware('permission:events.create');
	
	Route::put('events/{event}', 'EventController@update')->name('events.update')
			->middleware('permission:events.edit');
	
	Route::get('events/{event}', 'EventController@show')->name('events.show')
			->middleware('permission:events.show');
	
	Route::delete('events/{event}', 'EventController@destroy')->name('events.destroy')
			->middleware('permission:events.destroy');
	
	Route::get('events/{event}/edit', 'EventController@edit')->name('events.edit')
			->middleware('permission:events.edit');
	
		//Users
	
	
	
	Route::get('users', 'UserController@index')->name('users.index')
			->middleware('permission:users.index');
	
	Route::put('users/{user}', 'UserController@update')->name('users.update')
			->middleware('permission:users.edit');
	
	Route::get('users/{user}', 'UserController@show')->name('users.show')
			->middleware('permission:users.show');
	
	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');
	
	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');
	
	
	
	// menualiments
	
	Route::put('menus/{menu}/addAliment/{aliment}', 'MenuController@addAliment')->name('menus.addAliment')
			->middleware('permission:menus.edit');
	
	Route::delete('menus/{menu}/destroyAliment/{aliment}', 'MenuController@destroyAliment')->name('menus.destroyAliment')
			->middleware('permission:menus.edit');
	
	
	// menuevents
	
	Route::put('events/{event}/addMenu/{menu}', 'EventController@addMenu')->name('events.addMenu')
			->middleware('permission:events.edit');
	
	Route::delete('events/{event}/destroyMenu/{menu}', 'EventController@destroyMenu')->name('events.destroyMenu')
			->middleware('permission:events.edit');
	
});
