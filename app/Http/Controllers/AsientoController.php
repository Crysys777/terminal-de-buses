<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asiento;
use App\Http\Requests\AsientoRequest;

class AsientoController extends Controller
{
    public function index()
    {
    	$asientos = Asiento::orderBy('idAsiento', 'DESC')->paginate();
    
    	return view('asientos.index', compact('asientos'));
    }

    public function create()
    {
    	
    	return view('asientos.create');
    }

    public function store(AsientoRequest $request)
    {

    	$asiento = new Asiento;
    	
    	$asiento->numeroAsiento =$request->numeroAsiento;
    	$asiento->id_Bus =$request->id_Bus;
    	$asiento->id_Cliente =$request->id_Cliente;
    	$asiento->save();

    	return redirect()->route('asientos.index')
    					->with('info', 'El asiento fue guardado');
    }

    public function edit($idAsiento)
    {
    	$asiento = Asiento::find($idAsiento);
    	return view('asientos.edit', compact('asiento'));
    }

    public function update(AsientoRequest $request, $idAsiento)
    {
    	$asiento = Asiento::find($idAsiento);
    	$asiento->numeroAsiento =$request->numeroAsiento;
    	$asiento->id_Bus =$request->id_Bus;
    	$asiento->id_Cliente =$request->id_Cliente;
    	$asiento->save();

    	return redirect()->route('asientos.index')
    					->with('info', 'El asiento fue actualizado');
    }
   
  
    public function show($idAsiento)
    {

    	$asiento = Asiento::find($idAsiento);
    	return view('asientos.show', compact('asiento'));
    }

    public function destroy($idAsiento)
    {
    	$asiento = Asiento::find($idAsiento);
    	$asiento->delete();
    	return back()->with('info', 'El asiento fue eliminado');
    }
}
