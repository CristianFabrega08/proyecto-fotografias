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
                                </tr>
                            </thead>
                           @foreach($cuentas as $num => $cuenta)
                                <tbody>
                                    <td>{{$num+1}}</td>
                                    <td>{{$cuenta->user}}</td>
                                    <td>{{$cuenta->nombre}}</td>
                                    <td>{{$cuenta->apellido}}</td>
                                    <td>{{$cuenta->perfil_id}}</td>
                                </tbody>
                           @endforeach
                        </table>
                    
                </div>
            </div>
        </div>
    </div> 
</body>


@endsection