@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo producto
			<a href="{{ route('empresas.index')}}" class="btn btn-default pull-right">Listado</a>
		</h2>
		
		@include('empresas.fragment.error')

		{!! Form::open(['route'=>'empresas.store']) !!}

			@include('empresas.fragment.form')

		{!! Form::close() !!}
	</div>

	<div class="col-sm-4">
		@include('empresas.fragment.aside')
	</div>

	
@endsection