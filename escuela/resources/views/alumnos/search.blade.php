@extends('layouts.plantilla')
@section('title')
Detalle
@endsection
@section('content')
<ul>
    @foreach ($alumnos as $alumno)
    <p>{{$alumno->nombre_ape}}</p>
    @endforeach
    {{-- {{$alumnos->links()}} --}}
</ul>
@endsection