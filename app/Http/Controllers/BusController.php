<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\Http\Requests\BusRequest;

class BusController extends Controller
{
    public function index()
    {
    	$buses = Bus::orderBy('idBus', 'DESC')->paginate();
    	return view('buses.index', compact('buses'));
    }

    public function create()
    {
    	
    	return view('buses.create');
    }

    public function store(BusRequest $request)
    {
    	$bus = new Bus;

    	$bus -> matricula = $request->matricula;
    	$bus -> cantidadAsiento = $request->cantidadAsiento;
    	$bus -> cantidadPiso = $request->cantidadPiso;
    	$bus -> observacion = $request -> observacion;
    	$bus -> numeroCarril = $request -> numeroCarril;
    	$bus -> fotoInterna = $request -> fotoInterna;
    	$bus -> fotoExterna = $request -> fotoExterna;
    	$bus -> id_Empresa = $request -> id_Empresa;

    	$bus->save();
    	return redirect()->route('buses.index')->with('info', 'Los datos fueron guardados');
    }

    public function edit($idBus)
    {
    	
    	$bus = Bus::find($idBus);
    	return view('buses.edit', compact('bus'));
    }

    public function update(BusRequest $request, $idBus)
    {
    	$bus = Bus::find($idBus);

    	$bus -> matricula = $request->matricula;
    	$bus -> cantidadAsiento = $request->cantidadAsiento;
    	$bus -> cantidadPiso = $request->cantidadPiso;
    	$bus -> observacion = $request -> observacion;
    	$bus -> numeroCarril = $request -> numeroCarril;
    	$bus -> id_Empresa = $request -> id_Empresa;


    	$bus->save();
    	return redirect()->route('buses.index')->with('info', 'Los datos fueron actualizados');
    }


  
    public function show($idBus)
    {
    	
    	$bus = Bus::find($idBus);
    	return view('buses.show', compact('bus'));
    }

    public function destroy($idBus)
    {
    	
    	$bus = Bus::find($idBus);
    	$bus->delete();
    	return back()->with('info', 'El bus fue iliminado');
    }


}
