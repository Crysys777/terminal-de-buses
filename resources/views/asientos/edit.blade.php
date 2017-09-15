@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Asiento
			<a href="{{ route('asientos.index')}}" class="btn btn-default pull-right">Listado</a>
		</h2>
		
		@include('asientos.fragment.error')

		{!! Form::model($asiento, ['route'=>['asientos.update', $asiento->idAsiento, 'method' => 'PUT']])!!}

			@include('asientos.fragment.form')

		{!! Form::close()!!}
	</div>

	<div class="col-sm-4">
		@include('asientos.fragment.aside')
	</div>

	
@endsection