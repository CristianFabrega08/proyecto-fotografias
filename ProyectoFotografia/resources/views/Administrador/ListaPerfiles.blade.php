@extends('layouts.master')

@section('contenido')

<body style="background: linear-gradient(to bottom, #d34563 0%, #3a4ec0 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center"  >
            <div class="col-12 col-lg-8 order-last order-lg-first bg-white">
                <div class="card">
                        <table class="table table-bordered table-striped table-hover">
                            <div class="card-header">
                                Lista de perfiles
                            </div>
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Id de perfil</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                           @foreach($cuentas as $num => $cuenta)
                                <tr>
                                    <td>{{$num+1}}</td>
                                    <td>{{$cuenta->user}}</td>
                                    <td>{{$cuenta->nombre}}</td>
                                    <td>{{$cuenta->apellido}}</td>
                                    <td>{{$cuenta->perfil_id}}</td>
                                    <td>
                                        <span data-bs-toggle="tooltip" data-bs-title="Borrar {{$cuenta->user}}">
                                            <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#cuentaBorrarModel{{$cuenta->perfil_id}}">
                                                <span class="material-icons">delete</span>
                                            </button>
                                        </span>
                                    </td>
                                </tr>
                                <div class="modal fade" id="cuentaBorrarModel{{$cuenta->perfil_id}}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Borrando usuario..</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                                <div class="modal-body">
                                                    ¿Desea borrar a {{$cuenta->user}}?
                                                </div>
                                                <div class="modal-footer">
                                                    <form method="POST" action="{{route('cuentas.destroy',$cuenta->perfil_id)}}">
                                                        @csrf
                                                        @if ($cuenta->perfil_id==1)
                                                        <button type="button" class="btn btn-primary">No se puede borrar al administrador</button>

                                                        @else
                                                        
                                                        @method('delete')
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-warning">Borrar usuario</button>
                                                        @endif

                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div> 
</body>


@endsection