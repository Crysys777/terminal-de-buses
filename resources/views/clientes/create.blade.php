@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo cliente
		
			<a href="{{ route('clientes.index')}}" class="btn pull-right">Listado</a>
		</h2>
		
			@include('clientes.fragment.error')

		{!! Form::open(['route'=>'clientes.store'])!!}

			@include('clientes.fragment.form')

		{!! Form::close() !!}			
		
	</div>

	<div class="col-sm-4">
		@include('clientes.fragment.aside')
	</div>

	
@endsection