<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO PROYECTO</title>
</head>
<body>
<div class="col-12">
    <div class="card-body">
        <form method="POST" action="{{Route('update', $proyecto)}}">
            @csrf @method('PATCH')
            <div class="row">
                <label for="NombreProyecto">Nombre del proyecto</label>
                <input type="text" class="input" id="NombreProyecto" name="NombreProyecto" value="{{ old('NombreProyecto', $proyecto->NombreProyecto) }}">
                @error('NombreProyecto')
                    <span class="badge badge-light-danger relative-font-size">{{ $errors->first('NombreProyecto') }}</span>
                @enderror
            </div>

            <hr>

            <div class="row">
                <label for="fuenteFondos">Fuente de los fondos</label>
                <input type="text" class="input" id="fuenteFondos" name="fuenteFondos" value="{{ old('fuenteFondos', $proyecto->fuenteFondos) }}">
                @error('fuenteFondos')
                    <span class="badge badge-light-danger relative-font-size">{{ $errors->first('fuenteFondos') }}</span>
                @enderror
            </div>

            <hr>

            <div class="row">
                <label for="MontoPlanificado">Monto planificado</label>
                <input type="number" class="input" id="MontoPlanificado" name="MontoPlanificado" value="{{ old('MontoPlanificado', $proyecto->MontoPlanificado) }}">
                @error('MontoPlanificado')
                    <span class="badge badge-light-danger relative-font-size">{{ $errors->first('MontoPlanificado') }}</span>
                @enderror
            </div>

            <hr>

            <div class="row">
                <label for="MontoPatrocinado">Monto patrocinado</label>
                <input type="number" class="input" id="MontoPatrocinado" name="MontoPatrocinado" value="{{ old('MontoPatrocinado', $proyecto->MontoPatrocinado) }}">
                @error('MontoPatrocinado')
                    <span class="badge badge-light-danger relative-font-size">{{ $errors->first('MontoPatrocinado') }}</span>
                @enderror
            </div>

            <hr>

            <div class="row">
                <label for="MontoFondosPropios">Monto fondos propios</label>
                <input type="number" class="input" id="MontoFondosPropios" name="MontoFondosPropios" value="{{ old('MontoFondosPropios', $proyecto->MontoFondosPropios) }}">
                @error('MontoFondosPropios')
                    <span class="badge badge-light-danger relative-font-size">{{ $errors->first('MontoFondosPropios') }}</span>
                @enderror
            </div>

            <hr>

            <div class="row" align="left" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Actualizar</i></button>
            </div>
        </form>
    </div>
</div>    
</body>
</html>