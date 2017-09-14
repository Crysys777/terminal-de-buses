@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $bus->id_Empresa}}
			<a href="{{ route('buses.edit', $bus->idBus)}}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				
					<tr width="20px">ID: {{$bus->idBus}}</tr>
					<tr>Matricula: {{$bus->matricula}}</tr>
					<tr>Observacion: {!!$bus->observacion!!}</tr>
					<tr>Numero de asientos: {{$bus->cantidadAsiento}}</tr>
					<tr>Pisos: {{$bus->cantidadPiso}}</tr>
					<tr>Numero de carriel: {{$bus->numeroCarril}}</tr>
					<tr>Foto interna: {{$bus->fotoInterna}}</tr>
					<tr>Foto externa: {{$bus->fotoExterna}}</tr>
					

			</thead>
			<tbody>


				
			</tbody>
		</table>
			
			{!! $buses->render() !!}
			
	</div>
	<div class="col-sm-4">
		@include('buses.fragment.aside')
	</div>

@endsection