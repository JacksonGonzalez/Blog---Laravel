{{-- @extends('admin.template.main') --}}
@extends('home')
@section('title')
    Editar Categorias
@endsection

@section('formulario')
    <h1 class="text-center mt-2">Editar Categoria {{$category->name}}</h1>

    {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection