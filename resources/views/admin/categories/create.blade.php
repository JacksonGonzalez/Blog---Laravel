{{-- @extends('admin.template.main') --}}
@extends('home')
@section('title')
    Crear Categoria
@endsection

@section('formulario')
    <h1 class="text-center mt-2">Crear Categoria</h1>

    {!! Form::open(['route' => 'categories.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
