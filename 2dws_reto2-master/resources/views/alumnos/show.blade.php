@extends('layouts.alumnos')
@section('title', 'Ikasle bat ikusi')

@section('content')

        <h2>IKASLE </h2>
        <label><strong>Izen abizenak:</strong> {{ $alumno->nombre }}</label><br>

        @if ($alumno->foto)
            <img src="{{ url($alumno->foto)}}" alt="" width="200px" height="200px"/>
        @else
            <img src="{{ url('storage/alumnos/alumno.png') }}" alt="" width="200px" height="200px"/>
        @endif

        <label><strong>Adina:</strong> {{ $alumno->edad }}</label><br>
        <label><strong>Telefonoa:</strong> {{ $alumno->telefono }}</label><br>
        <label><strong>Helbidea:</strong> {{ $alumno->direccion }}</label><br>
        <br>

         <a href="{{ route('alumnos.edit', $alumno->id) }}">Ikaslearen datuak aldatu</a>
         <br>
         <a href="{{ route('alumnos.confirm', $alumno->id) }}">Ikaslea EZABATU</a>
@endsection
