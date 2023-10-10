<!DOCTYPE html>
<html>
<head>
  <title>TITULO </title>
  <style type="text/css">
    @page {
      size: 8.5in 11in;  /* width height */
    }
    body {
      margin-top: 1.0in;
      margin-right: 0.1in;
      margin-bottom: 1.0in;
      margin-left: 0.1in;
    }

    title {
      padding: 1em 2em;
      border-width: thin thick medium;
      color: black;
      background: white;
      border: solid;
    }

    td {
      border-bottom: 1px solid lightgray;
    }

    .label {
      border: solid 1px lightgray;
      padding: 5px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }
  </style>
</head>

<body>
    <div class="page body">
        <div class="row" style="margin-bottom: 25px">
            <div align="right">Martes, 5 de Septiembre de 2023</div>
            <div class="title">GOBIERNO DE EL SALVADOR</div>
            <div class="title">ALCALDIA MUNICIPAL DE SAN SALVADOR</div>
        </div>

        <table>
            <thead>
                <tr class="text-center">
                    <th class="label">PROYECTO</th>
                    <th class="label">FUENTE DE LOS FONDOS</th>
                    <th class="label">MONTO PLANIFICADO</th>
                    <th class="label">MONTO PATROCINADO</th>
                    <th class="label">FONDOS PROPIOS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{$proyecto->NombreProyecto}}</td>
                        <td>{{$proyecto->fuenteFondos}}</td>
                        <td align="right">{{$proyecto->MontoPlanificado}}</td>
                        <td align="right">{{$proyecto->MontoPatrocinado}}</td>
                        <td align="right">{{$proyecto->MontoFondosPropios}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</body>
</html>
