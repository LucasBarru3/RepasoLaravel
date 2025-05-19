@extends('layouts.alumnos')
@section('title', 'Irakaslea berria')

@section('content')

    <h1>IRAKASLE BERRIA </h1>

    <form method="post" action="{{ route('profesores.store') }}">
        @csrf
        Izen Abizena <input type="text" name="nombreApellido" value=""><br>
        Lanbidea <input type="text" name="profesion" value=""><br>
        Grado akademikoa <input type="text" name="gradoAcademico" value=""><br>
        Telefonoa<input type="text" name="telefono"  value=""><br>
        <button type="submit">Bidali</button>
    </form>


@endsection
