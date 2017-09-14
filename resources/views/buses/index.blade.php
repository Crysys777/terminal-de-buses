@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Listado de buses

			<a href="{{ route('buses.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		
		@include('buses.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Matricula</th>
					<th>Numero de asientos</th>
					<th>Pisos</th>
					<th>Numero de carriel</th>
					<th>Foto interna</th>
					<th>Foto externa</th>
					<th>Empresa</th>
					<th colspan="3"></th>

				</tr>
			</thead>
			<tbody>

				@foreach ($buses as $bus)
					
					<tr>
						<td>{{$bus->idBus}}</td>
						<td>
							<strong>{{$bus->matricula}}</strong>
							{{$bus->observacion}}
						</td>
						<td>{{$bus->cantidadAsiento}}</td>
						<td>{{$bus->cantidadPiso}}</td>
						<td>{{$bus->numeroCarril}}</td>
						<td>{{$bus->fotoInterna}}</td>
						<td>{{$bus->fotoExterna}}</td>
						<td>{{$bus->id_Empresa}}</td>
						<td>
							<a href="{{ route('buses.show', $bus->idBus)}}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('buses.edit', $bus->idBus)}}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('buses.destroy', $bus->idBus)}}" method="POST">
								{{ csrf_field() }}

								<input type="hidden" name="_method" value="DELETE">

								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>
			
			{!! $buses->render() !!}
			
	</div>
	<div class="col-sm-4">
		@include('buses.fragment.aside')
	</div>

@endsection