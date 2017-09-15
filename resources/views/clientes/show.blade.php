@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{$cliente->idCliente}} 
			<a href="{{ route('clientes.edit', $cliente->idCliente)}}" class="btn pull-right">Editar</a>
		</h2>
		<tr>
						
						<p><strong>Primer nombre: </strong>
							<strong>{{$cliente->primerNombre}}</strong>
						</p>
						<p><strong>Segundo nombre: </strong>
							{{$cliente->segundoNombre}}</p>
						<p><strong>Primer apellido: </strong>
							<strong>{{$cliente->primerApellido}}</strong>
						</p>
						<p><strong>Segundo apellido: </strong>
							{{$cliente->segundoApellido}}</p>
						<p><strong>Telefono: </strong>
							{{$cliente->telefono}}</p>
						<p><strong>Cedula o pasaporte: </strong>
							<strong>{{$cliente->ciPasaporte}}</strong>
						</p>
						<p><strong>Lugar de emision: </strong>
							{{$cliente->lugarCi}}</p>
						<p><strong>Sexo: </strong>
							{{$cliente->sexo}}</p>
						<p><strong>Fecha de nacimiento:</strong>
							{{$cliente->fechaNacimiento}}</p>
						<p><strong>Nacionalidad: </strong>
							{{$cliente->nacionalidad}}</p>
						<p><strong>Foto: </strong>
							{{$cliente->foto}}</p>

						
	</div>

	<div class="col-sm-4">
		@include('clientes.fragment.aside')
	</div>

	
@endsection