@extends('layouts.alumnos')
@section('title', 'Irakaslea aldatu')

@section('content')

    <h1>IRAKASLEA ALDATU - {{ $profesor->nombreApellido }} </h1>

    <form method="post" action="{{ route('profesores.update', $profesor) }}">
        @csrf
        @method('PUT')
        Izen Abizena <input type="text" name="nombreApellido" value="{{ $profesor->nombreApellido }}"><br>
        Lanbidea <input type="text" name="profesion" value="{{ $profesor->profesion }}"><br>
        Grado akademikoa <input type="text" name="gradoAcademico" value="{{ $profesor->gradoAcademico }}"><br>
        Telefonoa<input type="text" name="telefono"  value="{{ $profesor->telefono }}"><br>
        <button type="submit">Bidali</button>
    </form>


@endsection
