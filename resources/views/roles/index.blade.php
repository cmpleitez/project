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
    <a href="{{route('role.create')}}">CREAR</a>
    
    @foreach ($roles as $role)
        <p>{{$role->name}}</p>
        <a href="{{route('role.edit', $role->id)}}">EDITAR</a>
    @endforeach
</body>
</html>

@endsection