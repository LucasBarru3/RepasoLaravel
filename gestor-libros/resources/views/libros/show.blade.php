@extends('layouts.layout')
@section('title')
Libro {{$libro->titulo}}
@endsection
@section('content')
    <h3>{{$libro->titulo}}</h3>
    <h3>{{$libro->descripcion}}</h3>
    <h3>{{$libro->ano_publicacion}}</h3>
    <h3>{{$libro->autor_id}}</h3>
@endsection