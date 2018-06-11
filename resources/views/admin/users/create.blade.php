@extends('admin.template.main')
@section('title')
    Formulario nuevo Usuario
@endsection

@section('content')
    <h1 class="text-center mt-2">Crear Usuario</h1>

    {!! Form::open(['route' => 'users.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('username', 'Nombre de Usuario') !!}
                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*********', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['' => 'Selecione una opción', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection