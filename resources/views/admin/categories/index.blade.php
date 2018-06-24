{{-- @extends('admin.template.main') --}}
@extends('home')
@section('title')
    Listar Categorias
@endsection

@section('formulario')
    <h1 class="text-center mt-2">Listar Categorias</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-1">Agregar Nueva Categoria</a>
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
            @foreach ($categories as $category)
            <tr>
              <th class="lead" scope="row">{{ $category->id }}</th>
              <td class="lead" >{{ $category->name }}</td>
              <td class="lead" >{{ $category->updated_at}}</td>
              <td>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><span><i class="far fa-edit"></i></span></a>
                <a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span><i class="far fa-trash-alt"></i></span></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="text-center">
          {!! $categories->render() !!}
      </div>
@endsection