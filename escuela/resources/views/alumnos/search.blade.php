@extends('layouts.plantilla')
@section('title')
Detalle
@endsection
@section('content')
<ul>
    @foreach ($alumnos as $alumno)
    <p>{{$alumno->nombre_ape}}</p>
    <p>{{$alumno->edad}}</p>
    <p>{{$alumno->telefono}}</p>
    <p>{{$alumno->direccion}}</p>
    @endforeach
    {{-- {{$alumnos->links()}} --}}
</ul>
@endsection