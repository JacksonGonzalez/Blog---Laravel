<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="part1 d-inline">
    <a class="navbar-brand h1" href="/">Blog Facilito</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index')}}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index')}}">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index')}}">Articulos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index')}}">Imagenes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index')}}">Tags</a>
        </li>
        
      </ul>
    </div>
  </div>

  {{-- <div class="part2 navbar navbar-expand-lg">
    
      <li class="nav-item">
        <a class="nav-link" href="#">Página Principal</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
      </li>
  </div> --}}
    
  </nav>