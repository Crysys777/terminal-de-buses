@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Listado de asientos

			<a href="{{ route('asientos.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('asientos.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Numero del asiento</th>
					<th>ID Bus</th>
					<th>ID Cliente</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@<?php foreach ($asientos as $asiento): ?>
					<tr>
						<td>{{$asiento->idAsiento}}</td>
						<td>{{$asiento->numeroAsiento}}</td>
						<td>{{$asiento->id_Bus}}</td>
						<td>{{$asiento->id_Cliente}}</td>
						
						<td>
							<a href="{{ route('asientos.show', $asiento->idAsiento)}}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('asientos.edit', $asiento->idasiento)}}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('asientos.destroy', $asiento->idAsiento) }}" method="POST" accept-charset="utf-8">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>

						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		{!! $asientos->render()!!}
	</div>
	<div class="col-sm-4">
		@include('asientos.fragment.aside')
	</div>

@endsection