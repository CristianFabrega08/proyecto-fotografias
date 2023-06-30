@extends('layouts.master')

@section('contenido')

<body >
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <form action="{{route('home.show')}}">
            <select name="artista" id="" class="form-control">
                <option value="">Ver todas las fotos</option>
                @foreach ($artistas as $artista)
                    <option value="{{$artista->user}}">{{$artista->user}}</option>
                @endforeach
                
            </select>
            <button type="submit" class="btn btn-success">Buscar</button>
        </form>
        <div class="row "  >
            <div class=" col-lg-4 order-last order-lg-first bg-white">
                @foreach ($imagenes as $imagen)
                <div class="card">
                    
                        <div class="card">
                            <div class="card-header">
                                <h4>{{$imagen->titulo}} </h4>
                            </div>
                            
                            <div class="card-body">
                                <img src="{{Storage::url($imagen->archivo)}}" alt="{{$imagen->titulo}} {{$imagen->id}}" class="card-content card-img-top">
                                <h5>Autor: {{$imagen->cuenta_user}}</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <b> </b> {{$imagen->id}}
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
                @endforeach
            </div>
        </div>
    </div> 
</body>

@endsection