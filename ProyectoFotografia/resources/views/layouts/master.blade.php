<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inicio</title>
</head>
 <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" style="height: 70px">
    <div class="container-fluid">
      @if (Gate::allows('usuario'))
      <a class="navbar-brand" href="#">Bienvenido {{Auth::user()->user}}</a>

      @else
      <a class="navbar-brand" href="#">Bienvenido</a>
      @endif

      
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item"> <!--Este es para el publico sin cuenta-->
            <a class="nav-link" href="{{route('home.show')}}">Ver Fotografias de artistas</a>
          </li>
          @if (Gate::allows('admin-listar'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administrador
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('administrador.ListaPerfiles')}}">Gestionar Cuentas</a></li>
              <li><a class="dropdown-item" href="{{route('administrador.index')}}">Tipos de perfiles</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Fotografias</a></li>
              <li><a class="dropdown-item" href="#">BAN</a></li>
            </ul>
          @endif
          </li>
          @if (Gate::allows('artista-listar'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Artista
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('artista.index')}}">Crear cuenta</a></li>
              <li><a class="dropdown-item" href="{{route('artista.subirFoto')}}">Publicar Fotografias</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Editar Fotografias</a></li>
            </ul>
          </li>
          @endif
        </ul>
        @if(Gate::allows('usuario'))
        <form class="d-flex">
          <a href="{{route('cuentas.logout')}}" class="btn btn-danger">Cerrar Sesión</a>
        </form>
        @else
        <form class="d-flex">
          <a href="{{route('home.InicioSesion')}}" class="btn btn-primary">iniciar sesion</a>
        </form>
        @endif
        


      </div>
    </div>
  </nav>
@yield('contenido')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
 </body>
</html>