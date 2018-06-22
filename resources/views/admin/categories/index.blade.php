@extends('admin.template.main')

@section('title')
    Listar Categorias
@endsection

@section('content')
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
            {{-- @foreach ($users as $user)    
            <tr>
              <th class="lead" scope="row">{{ $user->id }}</th>
              <td class="lead" >{{ $user->name }}</td>
              <td class="lead" >{{ $user->username}}</td>
              <td class="lead" >{{ $user->email }}</td>
              <td>
              @if($user->type == "admin")
                <p class="lead">Administrador</p>
              @else
                <p class="lead">Miembro</p>
              @endif
              </td>
              <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span><i class="far fa-edit"></i></span></a>
                <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span><i class="far fa-trash-alt"></i></span></a>
              </td>
            </tr>
            @endforeach --}}
        </tbody>
      </table>
      
@endsection