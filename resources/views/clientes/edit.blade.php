@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{$cliente->idCliente}} 
			<a href="{{ route('clientes.index')}}" class="btn pull-right">Listado</a>
		</h2>
		
						
		@include('clientes.fragment.error')

		{!! Form::model($cliente, ['route'=>['clientes.update', $cliente->idCliente, 'method' => 'PUT']])!!}

			@include('clientes.fragment.form')

		{!! Form::close() !!}


	</div>

	<div class="col-sm-4">
		@include('clientes.fragment.aside')
	</div>

	
@endsection