@extends('home')

@section('title')
    editar Articulo
@endsection

@section('formulario')
    <h1 class="text-center mt-2">Editar Articulo {{$article->title}}</h1>

    {!! Form::open(['route' => ['articles.update', $article->id], 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo...', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('content', 'Contenido') !!}
                {!! Form::textarea('content', $article->content, ['class' => 'form-control', 'required']) !!}
        </div>
        
        <div class="form-group">
                {!! Form::label('tags', 'Tags') !!}
                {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple', 'data-placeholder' => 'Seleciona un tag', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Articulo', ['class' => 'btn btn-primary']) !!}
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