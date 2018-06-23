{{-- @extends('admin.template.main') --}}
@extends('home')
@section('title')
    Formulario Editar Usuario
@endsection

@section('formulario')
    <h1 class="text-center mt-2">Editar Usuario</h1>

    {!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('username', 'Nombre de Usuario') !!}
                {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['' => 'Selecione una opción', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('users.index') }}" class="btn btn-primary">Cancelar</a>
        </div>

    {!! Form::close() !!}
@endsection