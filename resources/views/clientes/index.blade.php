@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Listado de clientes

			<a href="{{ route('clientes.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		
		@include('clientes.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Primer nombre</th>
					<th>Segundo nombre</th>
					<th>Primer apellido</th>
					<th>Segundo apellido</th>
					<th>Telefono</th>
					<th>Cedula / Pasaporte</th>
					<th>Lugar de emision</th>
					<th>Sexo</th>
					<th>Fecha de nacimiento</th>
					<th>Nacionalidad</th>
					<th>Foto</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@<?php foreach ($clientes as $cliente): ?>
					<tr>
						<td>
							{{$cliente->idCliente}}
						</td>
						<td>
							<strong>{{$cliente->primerNombre}}</strong>
						</td>
						<td>{{$cliente->segundoNombre}}</td>
						<td>
							<strong>{{$cliente->primerApellido}}</strong>
						</td>
						<td>{{$cliente->segundoApellido}}</td>
						<td>{{$cliente->telefono}}</td>
						<td>
							<strong>{{$cliente->ciPasaporte}}</strong>
						</td>
						<td>{{$cliente->lugarCi}}</td>
						<td>{{$cliente->sexo}}</td>
						<td>{{$cliente->fechaNacimiento}}</td>
						<td>{{$cliente->nacionalidad}}</td>
						<td>{{$cliente->foto}}</td>
						
						<td>
							<a href="{{ route('clientes.show', $cliente->idCliente)}}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('clientes.edit', $cliente->idCliente)}}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('clientes.destroy', $cliente->idCliente) }}" method="POST" accept-charset="utf-8">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>

						</td>

					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		{!! $clientes->render() !!}
	</div>
	<div class="col-sm-4">
		@include('clientes.fragment.aside')
	</div>

@endsection