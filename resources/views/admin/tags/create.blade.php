@extends('home')

@section('title')
    Crear Tags
@endsection

@section('formulario')
    <h1 class="text-center mt-2">Crear Tag</h1>

    {!! Form::open(['route' => 'tags.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Tag', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection