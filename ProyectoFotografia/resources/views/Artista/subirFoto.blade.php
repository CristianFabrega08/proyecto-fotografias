@extends('layouts.master')

@section('contenido')

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center"  >
            <div class="col-lg-8 bg-white">
                <div class="card">
                    <div class="card-header">
                        Sube tu fotografia
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('artista.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Titulo</label>
                                <input type="text" id="titulo" name="titulo" class="form-control">
                            </div>
        
                            <div>
                                <label for="archivo">suba aqui la foto: </label>
                                <input type="file" id="archivo" name="archivo" class="form-control-file">
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