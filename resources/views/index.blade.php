@extends('app')
@section('content')
    <div class="container-fluid text-center">
        <div class="row p-5" style="float: left !important;">
            <div class="col-6">
                <a name="" class="btn btn-primary" href="{{Route('create')}}" role="button">NUEVO</a>
            </div>
        </div>
        <div class="row p-5" style="float: right !important;">
            <div class="col">
                <a name="" class="btn btn-warning" href="{{Route('report')}}" role="button">PDF</a>
            </div>
        </div>
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">PROYECTO</th>
                        <th scope="col">FUENTE DE LOS FONDOS</th>
                        <th scope="col">MONTO PLANIFICADO</th>
                        <th scope="col">MONTO PATROCINADO</th>
                        <th scope="col">FONDOS PROPIOS</th>
                        <th scope="col">TABLERO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proyectos as $proyecto)
                    <tr>
                        <th scope="row">{{$proyecto->NombreProyecto}}</th>
                        <td>{{$proyecto->fuenteFondos}}</td>
                        <td>{{$proyecto->MontoPlanificado}}</td>
                        <td>{{$proyecto->MontoPatrocinado}}</td>
                        <td>{{$proyecto->MontoFondosPropios}}</td>
                        <td>
                            <a name="" class="btn btn-primary" href="{{Route('edit', $proyecto->id)}}" role="button">Editar</a>
                            <a name="" class="btn btn-warning" href="{{Route('delete', $proyecto->id)}}" role="button">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>     
        </div>
    </div>
@endsection


