@extends('home')

@section('title')
    Listar Articulo
@endsection

@section('formulario')
    <h1 class="text-center my-1">Listar Articulos</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-2">Agregar Nuevo Articulo</a>
    
    {{-- Bucador de ARTICLES --}}
      {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => '']) !!}
        <div class="input-group">
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo..', 'id' => 'buscar']) !!}   
      {!! Form::close() !!}
    {{-- Fin del buscador --}}
    <table class="table table-hover">
        <thead>
          <tr class="lead">
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Categoria</th>
            <th scope="col">User</th>
            <th scope="col">Fecha Ultima Modificación</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
              <th class="lead" scope="row">{{ $article->id }}</th>
              <td class="lead" >{{ $article->title }}</td>
              <td class="lead" >{{ $article->category->name }}</td>
              <td class="lead" >{{ $article->user->username }}</td>
              <td class="lead" >{{ $article->updated_at}}</td>
              <td>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning"><span><i class="far fa-edit"></i></span></a>
                <a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span><i class="far fa-trash-alt"></i></span></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="text-center">
          {!! $articles->render() !!}
      </div>
@endsection