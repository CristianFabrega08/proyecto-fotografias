<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background: linear-gradient(to bottom, #8eaca8 0%, #17b968 100%);">

    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center ">
            <div class="col-lg-8 bg-white ">
                <h4>Iniciar sesion</h4>
                <small>Ingresa tus datos</small>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('cuentas.login')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="user" class="form-label">User</label>
                                <input type="text" id="user" name="user" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3 text-end">
                                
                                <button type="submit" class="btn btn-success" hr>Iniciar Sesión</button>
                                
                            </div>
                            <div>
                                <a href="{{route('home.show')}}">entrar como visitante</a>
                            </div>
                        </form>
                    </div>
                </div>
                @if($errors->any())
                    <div class="alert alert-warning mt-2">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        
                    </div>
                @endif
                
            </div>
        </div>

    </div>
    






















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>