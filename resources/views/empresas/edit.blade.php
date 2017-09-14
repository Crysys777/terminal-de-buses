@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Empresa
			<a href="{{ route('empresas.index')}}" class="btn btn-default pull-right">Listado</a>
		</h2>
		
		@include('empresas.fragment.error')

		{!! Form::model($empresa, ['route'=>['empresas.update', $empresa->idEmpresa, 'method' => 'PUT']])!!}

			@include('empresas.fragment.form')

		{!! Form::close()!!}
	</div>

	<div class="col-sm-4">
		@include('empresas.fragment.aside')
	</div>

	
@endsection