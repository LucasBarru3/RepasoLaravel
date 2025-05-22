@extends('layouts.plantilla')
@section('title')
Detalle Curso
@endsection
@section('content')
<ul>
    <h2>{{$curso->nombre}}</h2>
    <h2>{{$curso->nivel}}</h2>
    <h2>{{$curso->horasAcademicas}}</h2>
    <h2>{{$curso->profesor_id}}</h2>
</ul>
@endsection