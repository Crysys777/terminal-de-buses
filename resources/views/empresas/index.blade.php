@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Listado de empresas

			<a href="{{ route('empresas.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('empresas.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre de la empresa</th>
					<th>NIT</th>
					<th>Numero de autorizacion</th>
					<th>Fecha de fundacion</th>
					<th colspan="6">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@<?php foreach ($empresas as $empresa): ?>
					<tr>
						<td>{{$empresa->idEmpresa}}</td>
						<td>{{$empresa->nombreEmpresa}}</td>
						<td>{{$empresa->nitEmpresa}}</td>
						<td>{{$empresa->numeroAutorizacion}}</td>
						<td>{{$empresa->fechaFundacion}}</td>
						<td>
							<a href="{{ route('empresas.show', $empresa->idEmpresa)}}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('empresas.edit', $empresa->idEmpresa)}}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('empresas.destroy', $empresa->idEmpresa) }}" method="POST" accept-charset="utf-8">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>

						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		{!! $empresas->render()!!}
	</div>
	<div class="col-sm-4">
		@include('empresas.fragment.aside')
	</div>

@endsection