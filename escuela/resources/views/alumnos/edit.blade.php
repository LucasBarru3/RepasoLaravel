@extends('layouts.plantilla')
@section('title')
alumnos
@endsection
@section('content')
Crear Alumno
<form method="post" action={{route('alumnos.update', $alumno)}}>
    @method('put')
    @csrf
    <input type="text" name="nombre_ape" placeholder="nombre" value="{{$alumno->nombre_ape}}">
    <input type="number" name="edad" placeholder="edad" value="{{$alumno->edad}}">
    <input type="text" name=telefono placeholder="telefono" value="{{$alumno->telefono}}">
    <input type="text" name="direccion" placeholder="direccion" value="{{$alumno->direccion}}">
    <input type="submit">
</form>
@endsection