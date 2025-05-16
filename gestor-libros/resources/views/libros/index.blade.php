@extends('layouts.layout')
@section('title')
Libros
@endsection
@section('content')
    <table style="border-collapse:collapse;">
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Año Publicado</th>
            <th>Accion</th>
            <th>Accion</th>
        </tr>
        @foreach ($libros as $libro)
        <tr>
            <td><a href="{{route('libros.show', $libro->id) }}">{{$libro->titulo}}</a></td>
            <td>{{$libro->descripcion}}</td>
            <td>{{$libro->ano_publicacion}}</td>
            <td><a href="{{route('libros.confirmar', $libro->id)}}">Eliminar</a></td>
            <td><a href="{{route('libros.edit', $libro}}">Editar</a></td>
        </tr>
        @endforeach
        {{$libros->links()}}
    </table>

    <style>
        th,td{
            border: solid 1px black;
        }
    </style>
@endsection