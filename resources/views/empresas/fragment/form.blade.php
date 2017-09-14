<div class="form-group">
	{!! Form::label('nombreEmpresa', 'Nombre de la empresa')!!}
	{!! Form::text('nombreEmpresa', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('nitEmpresa', 'Numero NIT de la empresa')!!}
	{!! Form::text('nitEmpresa', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('numeroAutorizacion', 'Numero de autorizacion de la empresa')!!}
	{!! Form::text('numeroAutorizacion', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('fechaFundacion', 'Fecha de fundacion')!!}
	{!! Form::date('fechaFundacion', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class'=>'btn btn-primary'])!!}
	
</div>