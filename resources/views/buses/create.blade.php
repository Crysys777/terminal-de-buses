@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo bus
			<a href="{{ route('buses.index')}}" class="btn btn-default pull-right">Listado</a>
		</h2>

			@include('buses.fragment.error')

		{!! Form::open(['route'=>'buses.store']) !!}

			@include('buses.fragment.form')

		{!! Form::close() !!}

	</div>
	<div class="col-sm-4">
		@include('buses.fragment.aside')
	</div>

@endsection