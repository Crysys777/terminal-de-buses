<div class="form-group">
	{!! Form::label('primerNombre', 'Primer nombre')!!}
	{!! Form::text('primerNombre', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('segundoNombre', 'Segundo nombre')!!}
	{!! Form::text('segundoNombre', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('primerApellido', 'Primer apellido')!!}
	{!! Form::text('primerApellido', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('segundoApellido', 'Segundo apellido')!!}
	{!! Form::text('segundoApellido', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('telefono', 'Telefono')!!}
	{!! Form::text('telefono', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('ciPasaporte', 'Cedula o pasaporte')!!}
	{!! Form::text('ciPasaporte', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('lugarCi', 'Lugar de emision')!!}
	{!! Form::text('lugarCi', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('sexo', 'Sexo')!!}
	{!! Form::text('sexo', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('fechaNacimiento', 'Fecha de nacimiento')!!}
	{!! Form::date('fechaNacimiento', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('nacionalidad', 'Nacionalidad')!!}
	{!! Form::text('nacionalidad', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('foto', 'Foto')!!}
	{!! Form::file('foto', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class'=>'btn btn-primary'])!!}
	
</div>