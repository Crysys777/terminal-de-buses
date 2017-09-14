@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar datos
			<a href="{{ route('buses.index')}}" class="btn btn-default pull-right">Listado</a>
		</h2>
			Formulario

			{!! Form::model($bus, ['route'=>['buses.update', $bus->idBus, 'method' => 'PUT']])!!}

			@include('empresas.fragment.form')

			{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		@include('buses.fragment.aside')
	</div>

@endsection