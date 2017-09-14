<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
    public function index()
    {

    	$empresas = Empresa::orderBy('idEmpresa', 'DESC')->paginate();
    	return view('empresas.index', compact('empresas'));
    }

    public function edit($idEmpresa)
    {   
    	$empresa = Empresa::find($idEmpresa);
    	return view('empresas.edit', compact('empresa'));
    }

    public function store(EmpresaRequest $request)
    {
        $empresa = new Empresa;
        $empresa ->nombreEmpresa = $request->nombreEmpresa;
        $empresa ->nitEmpresa = $request->nitEmpresa;
        $empresa ->numeroAutorizacion = $request->numeroAutorizacion;
        $empresa ->fechaFundacion = $request->fechaFundacion;
        $empresa ->save();

        return redirect()->route('empresas.index')
                            ->with('info', 'Los datos fueron guardados');
    }

    public function update(EmpresaRequest $request, $idEmpresa)
    {
        $empresa = Empresa::find($idEmpresa);
        $empresa ->nombreEmpresa = $request->nombreEmpresa;
        $empresa ->nitEmpresa = $request->nitEmpresa;
        $empresa ->numeroAutorizacion = $request->numeroAutorizacion;
        $empresa ->fechaFundacion = $request->fechaFundacion;
        $empresa ->save();

        return redirect()->route('empresas.index')
                            ->with('info', 'Los datos fueron actualizados');
    }

    public function create()
    {

    	return view('empresas.create');
    }

    public function show($idEmpresa)
    {

    	$empresa = Empresa::find($idEmpresa);
    	return view('empresas.show', compact('empresa'));
    }

    public	function destroy($idEmpresa)
    {
    	$empresa = Empresa::find($idEmpresa);
    	$empresa->delete();

    	return back()->with('info', 'La empresa fue eliminada');
    }
}
