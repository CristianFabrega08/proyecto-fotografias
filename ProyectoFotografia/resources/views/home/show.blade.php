@extends('layouts.master')

@section('contenido')

<body style="background: linear-gradient(to bottom, #d34563 0%, #3a4ec0 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center"  >
            <div class="col-12 col-lg-8 order-last order-lg-first bg-white">
                @foreach ($imagen as $imagenes)
                <div class="card">
                    <div class="col-12 col-md-4 col-lg-2">
                        <div class="card">
                            <img src="{{Storage::url($imagenes->archivo)}}" alt="{{$imagenes->titulo}} {{$imagenes->id}}">
                            <div class="card-body">
                                <h5 class="card-title">Titulo: {{$imagenes->titulo}}</h5>
                                <h5>usuario: {{$imagenes->cuenta_user}}</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <b># </b> {{$imagenes->id}}
                                    </li>
                                </ul>
                            </div>
                            @if (Gate::allows('admin-listar'))
                            <div>
                                <span data-bs-toggle="tooltip" data-bs-title="">
                                    <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="">
                                        <span class="material-icons">delete</span>
                                    </button>
                                </span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> 
</body>

@endsection