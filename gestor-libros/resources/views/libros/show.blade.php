@extends('layouts.layout')
@section('title')
Libro {{$libro->titulo}}
@endsection
@section('content')
    <h3>{{$libro->titulo}}</h3>
    <h3>{{$libro->descripcion}}</h3>
    <h3>{{$libro->ano_publicacion}}</h3>
    <h3>{{$libro->autor_id}}</h3>
    @foreach ($opiniones as  $opinion)
        <h3>User:{{$opinion->nombre_usuario}}</h3>
        <h3>Valoracion: {{$opinion->valoracion}}</h3>
        <h3>Comentario: {{$opinion->comentario}}</h3>
        <h3>User Id: {{$opinion->libro_id}}</h3>
    @endforeach
    <form action="{{ route('opiniones.store') }}" method="post">
        @csrf
        <input type="text" name="nombre_usuario" placeholder="Usuario">
        <input type="text" name="comentario" placeholder="Comentario">
        <input type="number" name="valoracion" placeholder="Valoracion">
        <input type="text" hidden name="libro_id" value="{{$libro->id}}" placeholder="Libro Id">
        <input type="submit" value="Enviar">
    </form>
@endsection