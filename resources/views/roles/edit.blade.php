@extends('app')
@section('content')
    <p>{{$role->name}}</p>
    @foreach ($permissions as $permission)
        <li>{{$permission->id}} | {{$permission->name}}</li>
    @endforeach
@endsection