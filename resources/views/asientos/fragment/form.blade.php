<div class="form-group">
	{!! Form::label('numeroAsiento', 'Numero de asiento')!!}
	{!! Form::text('numeroAsiento', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('id_Bus', 'ID Bus')!!}
	{!! Form::text('id_Bus', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('id_Cliente', 'ID Cliente')!!}
	{!! Form::text('id_Cliente', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class'=>'btn btn-primary'])!!}
	
</div>