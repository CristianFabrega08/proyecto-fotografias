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
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item"> <!--Este es para el publico sin cuenta-->
            <a class="nav-link" href="#">Ver Fotografias de artistas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administrador
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Listar perfiles</a></li>
              <li><a class="dropdown-item" href="{{route('administrador.index')}}">Gestionar cuentas</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Fotografias</a></li>
              <li><a class="dropdown-item" href="#">BAN</a></li>
            </ul>
          </li>
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
        </ul>
        <form class="d-flex">
          <a href="{{route('cuentas.logout')}}" class="btn btn-danger">Cerrar Sesión</a>
        </form>
      </div>
    </div>
  </nav>
@yield('contenido')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

 </body>
</html>