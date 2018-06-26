@extends('home')

@section('title')
    Listar Tags
@endsection

@section('formulario')
    <h1 class="text-center my-1">Listar Tags</h1>
    <a href="{{ route('tags.create') }}" class="btn btn-primary mb-2">Agregar Nueva Tag</a>
    
    {{-- Bucador de TAGS --}}
      {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => '']) !!}
        <div class="input-group">
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Tag..', 'id' => 'buscar']) !!}   
      {!! Form::close() !!}
    {{-- Fin del buscador --}}
    <table class="table table-hover">
        <thead>
          <tr class="lead">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha Ultima Modificación</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
              <th class="lead" scope="row">{{ $tag->id }}</th>
              <td class="lead" >{{ $tag->name }}</td>
              <td class="lead" >{{ $tag->updated_at}}</td>
              <td>
                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning"><span><i class="far fa-edit"></i></span></a>
                <a href="{{ route('tags.destroy', $tag->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span><i class="far fa-trash-alt"></i></span></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="text-center">
          {!! $tags->render() !!}
      </div>
@endsection