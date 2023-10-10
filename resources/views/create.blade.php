@extends('app')
@section('content')
<form method="POST" action="{{Route('store')}}">
    @csrf
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-6">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">NOMBRE DEL PROYECTO</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="NombreProyecto" value="{{ old('NombreProyecto') }}">
                </div>
            </div>

            <div class="col-6">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">FUENTE DE LOS FONDOS</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="fuenteFondos" value="{{ old('fuenteFondos') }}">
                </div>
            </div>

            <div class="col-6">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">MONTO PLANIFICADO</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MontoPlanificado" value="{{ old('MontoPlanificado') }}">
                </div>
            </div>

            <div class="col-6">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">MONTO PATROCINADO</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MontoPatrocinado" value="{{ old('MontoPatrocinado') }}">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">FONDOS PROPIOS</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MontoFondosPropios" value="{{ old('MontoFondosPropios') }}">
                </div>
            </div>
        </div>
        <div class="row float-end">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>

</form>    

@endsection