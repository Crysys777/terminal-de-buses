@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $asiento->numeroAsiento }}
			<a href="{{ route('asientos.edit', $asiento->idAsiento)}}" class="btn btn-default pull-right">Editar</a>
		</h2>
		<p>
			{{ $asiento->id_Bus }}
		</p>
		<p>
			{{ $asiento->id_Cliente }}
		</p>
		
		
	</div>

	<div class="col-sm-4">
		@include('asientos.fragment.aside')
	</div>

	
@endsection