@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $empresa->nombreEmpresa }}
			<a href="{{ route('empresas.edit', $empresa->idEmpresa)}}" class="btn btn-default pull-right">Editar</a>
		</h2>
		<p>
			{{ $empresa->nitEmpresa }}
		</p>
		<p>
			{{ $empresa->numeroAutorizacion }}
		</p>
		<p>
			{{ $empresa->fechaFundacion }}
		</p>

		
	</div>

	<div class="col-sm-4">
		@include('empresas.fragment.aside')
	</div>

	
@endsection