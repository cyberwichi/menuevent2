<?php

namespace App\Http\Controllers;

use App\Event;
use App\Menu;
use Illuminate\Http\Request;

class EventController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $events = Event::orderBy('dia', 'nombre')->paginate(9);
		return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$event=New Event;
		$menus=Menu::all();
        return view('events.create', compact('event', 'menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $event= Event::create($request->all());
		
		
		return redirect()->route('events.index', $event->id)
			->with('info', 'menu guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
		
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
		$menus=$event->menus;
		$menusAll=Menu::all();
		$diffs=$menusAll->diff($menus);
		
		
		return view('events.edit',compact('event', 'diffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
       $event->update($request->all());
		return redirect()->route('events.index', $event->id)
			->with('info', 'Evento actuializado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
		return back()->with('info','menu eliminado correctamente');
    }
	
	public function destroyMenu(Event $event , Menu $menu)
    {
        $event->menus()->detach($menu->id);
		return redirect()->route('events.edit', $event->id)->with('info','Menu eliminado del evento correctamente');
    }
	public function addMenu(Request $request, Event $event, Menu $menu)
	{
		$event->menus()->attach($request->input('menu'), ['cantidad' => $request->input('cantidad') , 'comentario'=> $request->input('comentario')]);
			
		return redirect()->route('events.edit', $event->id)
			->with('info', 'Menu añadido al evento con éxito');
	}
}
