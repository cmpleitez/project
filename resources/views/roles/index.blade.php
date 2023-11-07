@extends('app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @can('crear')
        <a href="{{route('role.create')}}">CREAR</a>    
    @endcan
    
    @foreach ($roles as $role)
        <div class="row">

            <div class="col-6">
                @can('edit')
                    {{$role->name}}
                @else
                    {{$role->name}} Solo lectura
                @endcan
            </div>

            <div class="col-6">
                @can('edit')
                    <a href="{{route('role.edit', $role->id)}}">EDITAR</a>
                @endcan

                @can('delete')
                    <a href="{{route('role.delete', $role->id)}}">ELIMINAR</a>
                @endcan
            </div>

        </div>
    @endforeach

</body>
</html>

@endsection