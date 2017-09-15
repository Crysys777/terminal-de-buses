@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo asiento
			<a href="{{ route('asientos.index')}}" class="btn btn-default pull-right">Listado</a>
		</h2>
		
		@include('asientos.fragment.error')

		{!! Form::open(['route'=>'asientos.store']) !!}

			@include('asientos.fragment.form')

		{!! Form::close() !!}
	</div>

	<div class="col-sm-4">
		@include('asientos.fragment.aside')
	</div>

	
@endsection