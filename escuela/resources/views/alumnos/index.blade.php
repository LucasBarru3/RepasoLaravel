@extends('layouts.plantilla')
@section('title')
alumnos
@endsection
@section('content')
<h2>LISTADO DE ALUMNOS</h2>
<table style="border:2px solid red">
    <tr>
        <th>Nombre </th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Direccion</th>
    </tr>
    @foreach ($alumnos as $alumno)
    <tr>
        <td><a href="{{route('alumnos.show', $alumno->id)}}">{{$alumno->nombre_ape}}</a></td>
        <td>{{$alumno->edad}}</td>
        <td>{{$alumno->telefono}}</td>
        <td>{{$alumno->direccion}}</td>
        <td><a href="{{route('alumnos.edit',$alumno->id)}}">Editar</a></td>
        <td><a href="{{route('alumnos.confirmar', $alumno->id)}}">Eliminar</a></td>
    </tr>
    @endforeach
@endsection