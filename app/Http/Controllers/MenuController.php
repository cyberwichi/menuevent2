<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Menu_aliment;
use Illuminate\Http\Request;
use App\Aliment;
use DB;

class MenuController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('nombre')->paginate(9);
		return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
		
    {
		
        return view('menus.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $menu= Menu::create($request->all());
		
		
		return redirect()->route('menus.index')
			->with('info', 'menu guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
		
		return view('menus.show',compact('menu'));	
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
		
    {
  		$aliments=$menu->aliments;
		$alimentsAll=Aliment::all();
		$diffs=$alimentsAll->diff($aliments);
		
		return view('menus.edit',compact('menu', 'diffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
		
	{
       
		$menu->update($request->all());
		
		return redirect()->route('menus.index', $menu->id)
			->with('info', 'menu actuializado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
		return back()->with('info','menu eliminado correctamente');
    }
	public function destroyAliment(Menu $menu, Aliment $aliment)
    {
        $menu->aliments()->detach($aliment->id);
		return redirect()->route('menus.edit', $menu->id)->with('info','alimento eliminado del menu correctamente');
    }
	public function addAliment(Menu $menu, Aliment $aliment)
	{
		$menu->aliments()->attach($aliment->id);
			return redirect()->route('menus.edit', $menu->id)
			->with('info', 'Alimento añadido al menu con éxito');
	}
}
