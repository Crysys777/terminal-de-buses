<div class="form-group">
	{!! Form::label('matricula', 'Numero de la matricula')!!}
	{!! Form::text('matricula', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('observacion', 'Observaciones')!!}
	{!! Form::textarea('observacion', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('cantidadAsiento', 'Numero de asientos')!!}
	{!! Form::text('cantidadAsiento', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('cantidadPiso', 'Numero de piso')!!}
	{!! Form::text('cantidadPiso', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('numeroCarril', 'Numero de carril')!!}
	{!! Form::text('numeroCarril', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('fotoInterna', 'Foto interna')!!}
	{!! Form::file('fotoInterna', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('fotoExterna', 'Foto externa')!!}
	{!! Form::file('fotoExterna', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('id_Empresa', 'Empresa')!!}
	{!! Form::text('id_Empresa', null, ['class'=>'form-control'])!!}
</div>


<div class="form-group">
	{!! Form::submit('Enviar', ['class'=>'btn btn-primary'])!!}
	
</div>