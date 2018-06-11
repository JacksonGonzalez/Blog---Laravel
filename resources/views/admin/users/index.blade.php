@extends('admin.template.main')

@section('title')
    Listar Usuarios
@endsection

@section('content')
    <h1 class="text-center mt-2">Listar Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-1">Agregar Nuevo Usuario</a>
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
              <td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {!! $users->render() !!}
@endsection