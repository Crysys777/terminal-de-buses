<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
     public function index()
    {
    	$clientes = Cliente::orderBy('idCliente', 'DESC')->paginate();
    	

    	return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
    	
    	return view('clientes.create');
    }

    public function store(ClienteRequest $request)
    {

    	$cliente = new Cliente;
    	
    	$cliente->primerNombre =$request->primerNombre;
    	$cliente->segundoNombre =$request->segundoNombre;
    	$cliente->primerApellido =$request->primerApellido;
    	$cliente->segundoNombre =$request->segundoNombre;
    	$cliente->telefono =$request->telefono;
    	$cliente->ciPasaporte =$request->ciPasaporte;
    	$cliente->lugarCi =$request->lugarCi;
    	$cliente->sexo =$request->sexo;
    	$cliente->fechaNacimiento =$request->fechaNacimiento;
    	$cliente->nacionalidad =$request->nacionalidad;
    	$cliente->foto =$request->foto;
    	$cliente->save();

    	return redirect()->route('clientes.index')
    					->with('info', 'El cliente fue guardado');
    }

    public function edit($idCliente)
    {
    	$cliente = Cliente::find($idCliente);
    	return view('clientes.edit', compact('cliente'));
    }

    public function update(ClienteRequest $request, $idCliente)
    {
    	$cliente = Cliente::find($idCliente);
    	$cliente->primerNombre =$request->primerNombre;
    	$cliente->segundoNombre =$request->segundoNombre;
    	$cliente->primerApellido =$request->primerApellido;
    	$cliente->segundoNombre =$request->segundoNombre;
    	$cliente->telefono =$request->telefono;
    	$cliente->ciPasaporte =$request->ciPasaporte;
    	$cliente->lugarCi =$request->lugarCi;
    	$cliente->sexo =$request->sexo;
    	$cliente->fechaNacimiento =$request->fechaNacimiento;
    	$cliente->nacionalidad =$request->nacionalidad;
    	$cliente->foto =$request->foto;
    	$cliente->save();

    	return redirect()->route('clientes.index')
    					->with('info', 'El cliente fue actualizado');
    }
   
  
    public function show($idCliente)
    {

    	$cliente = Cliente::find($idCliente);
    	return view('clientes.show', compact('cliente'));
    }

    public function destroy($idCliente)
    {
    	$cliente = Cliente::find($idCliente);
    	$cliente->delete();
    	return back()->with('info', 'El cliente fue eliminado');
    }
}
