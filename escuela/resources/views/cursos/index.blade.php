@extends('layouts.plantilla')
@section('title')
cursos
@endsection
@section('content')
<h2>LISTADO DE Cursos</h2>
{{-- <form action="{{route('alumnos.search')}}" method="GET">
    <input type="text" name='nombre_ape'>
    <input type="submit">
</form> --}}
<table style="border:2px solid red">
    <tr>
        <th>Nombre </th>
        <th>Nivel</th>
        <th>Horas Academicas</th>
        <th>Profesor Id</th>
    </tr>
    @foreach ($cursos as $curso)
    <tr>
        <td><a href="{{route('cursos.show', $curso)}}">{{$curso->nombre}}</a></td>
        <td>{{$curso->nivel}}</td>
        <td>{{$curso->horasAcademicas}}</td>
        <td>{{$curso->profesor_id}}</td>
        {{-- <td><a href="{{route('alumnos.edit',$alumno->id)}}">Editar</a></td> --}}
        <td><a href="{{route('cursos.confirmar', $curso->id)}}">Eliminar</a></td>
    </tr>
    @endforeach
    {{$cursos->links()}}
    <x-footer :chichilla="'Texto dinámico en el footer'" />
@endsection