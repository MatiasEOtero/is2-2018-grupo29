<div class="form-group">
    {!! Form::label('name', 'Nombre del usuario') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('apellido', 'Apellido del usuario') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email del usuario') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fechanacimiento', 'Fecha de nacimiento del producto') !!}
    {!! Form::text('fechanacimiento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>