<?php

namespace App\Http\Controllers;

use App\Aliment;
use Illuminate\Http\Request;

class AlimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliments = Aliment::orderBy('id')->paginate(9);
		return view('aliments.index', compact('aliments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aliments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $aliment= Aliment::create($request->all());
		
		
		return redirect()->route('aliments.index', $aliment->id)
			->with('info', 'Producto guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function show(Aliment $aliment)
    {
        return view('aliments.show', compact('aliment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function edit(Aliment $aliment)
    {
        return view('aliments.edit',compact('aliment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aliment $aliment)
    {
       $aliment->update($request->all());
		return redirect()->route('aliments.index', $aliment->id)
			->with('info', 'Producto actuializado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aliment  $aliment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aliment $aliment)
    {
        $aliment->delete();
		return back()->with('info','Producto eliminado correctamente');
    }
}
