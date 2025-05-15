@extends('layouts.plantilla')
@section('title')
alumnos
@endsection
@section('content')
Crear Alumno
<form method="post" action={{route('alumnos.store')}}>
    @csrf
    <input type="text" name="nombre_ape" placeholder="nombre">
    <input type="number" name="edad" placeholder="edad">
    <input type="text" name=telefono placeholder="telefono">
    <input type="text" name="direccion" placeholder="direccion">
    <input type="submit">
</form>
@endsection