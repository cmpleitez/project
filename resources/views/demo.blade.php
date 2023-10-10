<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTOS</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
             padding: 15px;
        }
    </style>

</head>
<body>
<div style="width: 50%">
    <div class="card-body">
        <div class="row">
            <a href="{{Route('create')}}">
            <h3>NUEVO</h3>
            </a>
        </div>
        <div class="row" align="right">
            <a href="{{Route('report')}}">
                <h3>PDF</h3>
            </a>
        </div>

        <hr>

        <table>
            <thead>
                <tr class="text-center">
                    <th>PROYECTO</th>
                    <th>FUENTE DE LOS FONDOS</th>
                    <th>MONTO PLANIFICADO</th>
                    <th>MONTO PATROCINADO</th>
                    <th>FONDOS PROPIOS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $proyecto)
                    <tr class="text-center">
                        <td>{{$proyecto->NombreProyecto}}</td>
                        <td>{{$proyecto->fuenteFondos}}</td>
                        <td>{{$proyecto->MontoPlanificado}}</td>
                        <td>{{$proyecto->MontoPatrocinado}}</td>
                        <td>{{$proyecto->MontoFondosPropios}}</td>
                        <td><a href="{{Route('edit', $proyecto->id)}}">EDITAR</a></td>
                        <td><a href="{{Route('delete', $proyecto->id)}}">ELIMINAR</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>    
</body>
</html>