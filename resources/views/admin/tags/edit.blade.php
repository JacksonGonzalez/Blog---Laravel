@extends('home')

@section('title')
    Editar Tags
@endsection

@section('formulario')
    <h1 class="text-center mt-2">Editar Tag {{$tag->name}}</h1>

    {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'Nombre del Tag', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection