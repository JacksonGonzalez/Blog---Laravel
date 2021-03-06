@extends('home')

@section('title')
    Crear Articulo
@endsection

@section('formulario')
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo...', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('content', 'Contenido') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('tags', 'Tags') !!}
                {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple', 'data-placeholder' => 'Seleciona un tag', 'required']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('image', 'Imagen') !!}
                {!! Form::file('image') !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Agregar Articulo', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection

@section('js') 
    <script>
        $(".select-tag").chosen({
            // no_results_text: "Oops, No encontrado!"
        });

        $('.textarea-content').trumbowyg();
    </script>
@endsection