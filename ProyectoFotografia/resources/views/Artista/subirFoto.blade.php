@extends('layouts.master')

@section('contenido')

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center"  >
            <div class="col-lg-8 bg-white">
                <div class="card">
                    <div class="card-header">
                        Crea tu cuenta
                    </div>
                    <div class="card-body">
                        <form method="" action="">
                            @csrf
                            <div class="mb-3">
                                <label for="user" class="form-label">Titulo</label>
                                <input type="text" id="user" name="user" class="form-control">
                            </div>
        
                            <div>
                                <label for="formFileLg" class="form-label">Suba aquí la imagen</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block mt-4">
                                <button type ="reset" class="btn btn-danger">Cancelar</button>
                                <button type ="submit" class="btn btn-success">Enviar datos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>


@endsection