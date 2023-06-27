@extends('layouts.master')

@section('contenido')
<body style="background: linear-gradient(to bottom, #d34563 0%, #3a4ec0 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center"  >
            <div class="col-12 col-lg-8 order-last order-lg-first bg-white">
                <div class="card">
                    
                        <table class="table table-bordered table-striped table-hover">
                            <div class="card-header">
                                Tipos de perfiles
                            </div>
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre de perfil</th>
                                    <th>Id de perfil</th>
                                    
                                </tr>
                            </thead>
                            @foreach($perfiles as $num => $perfil)
                                <tbody>
                                    <td>{{$num+1}}</td>
                                    <td>{{$perfil->nombre}}</td>
                                    <td>{{$perfil->id}}</td>
                                </tbody>
                                
                            @endforeach
                        </table>
                    
                </div>
            </div>
        </div>
    </div> 
</body>

@endsection