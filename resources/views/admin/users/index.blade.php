{{-- @extends('admin.template.main') --}}
@extends('home')

@section('title')
    Listar Usuarios
@endsection

@section('formulario')
    <h1 class="text-center my-1">Listar Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Agregar Nuevo Usuario</a>
    <table class="table table-hover">
        <thead>
          <tr class="lead">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre Usuario</th>
            <th scope="col">Correo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)    
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
            @endforeach
        </tbody>
      </table>
      {!! $users->render() !!}
@endsection