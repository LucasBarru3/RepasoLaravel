@extends('layouts.layout')
@section('title')
Eliminar Libro
@endsection
@section('content')
<form action="{{route('libros.destroy', $libro) }}" method="post">
    @csrf
    @method('delete')
    <h2>Seguro que quieres eliminar: {{$libro->titulo}}</h2>
    <input type="submit">
    <a href="{{route('libros.index')}}">Volver</a>
</form>
@endsection