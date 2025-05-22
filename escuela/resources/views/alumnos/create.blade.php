@extends('layouts.plantilla')
@section('title')
alumnos
@endsection
@section('content')
Crear Alumno
<form method="post" action="{{route('alumnos.store')}}" enctype="multipart/form-data" >
    @csrf
    <input type="text" name="nombre_ape" placeholder="nombre" value="{{old('nombre_ape')}}">
    <input type="number" name="edad" placeholder="edad" value="{{old('edad')}}">
    <input type="text" name=telefono placeholder="telefono" value="{{old('telefono')}}">
    <input type="text" name="direccion" placeholder="direccion" value="{{old('direccion')}}">
    <input type="file" name="imagen">
    <input type="submit">
    @error('nombre_ape')
    <p>{{$message}}</p>
    @enderror
    @error('edad')
    <p>{{$message}}</p>
    @enderror
</form>
@endsection