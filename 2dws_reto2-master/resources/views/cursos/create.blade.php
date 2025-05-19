@extends('layouts.alumnos')
@section('title', 'Ikastaro berria')

@section('content')

    <h1>IKASTARO BERRIA </h1>

    <form method="post" action="{{ route('cursos.store') }}">
        @csrf
        Izena<input type="text" name="nombre" value=""><br>
        Maila <select name="nivel" id="nivel">
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
        </select>
        <br>
        Ordu akademikoak <input type="text" name="horasAcademicas" value=""><br>

        {{-- Irakaslea aukeratu --}}
        Irakaslea <select name="profesor_id" id="profesor_id">
        @foreach ($profesores as $profesor)
            <option value="{{ $profesor->id }}">{{ $profesor->nombreApellido }}</option>
        @endforeach
        </select>
        <br>
        <button type="submit">Bidali</button>
    </form>

@endsection
