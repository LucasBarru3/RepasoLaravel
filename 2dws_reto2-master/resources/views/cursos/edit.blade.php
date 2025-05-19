@extends('layouts.alumnos')
@section('title', 'Ikastaro berria')

@section('content')

    <h1>IKASTARO BERRIA </h1>

    <form method="post" action="{{ route('cursos.update', $curso) }}">
        @csrf
        @method('PUT')
        <label for="nombre">Izena</label>
            <input type="text" name="nombre" id="nombre" value="{{ $curso->nombre }}"><br>
        <label for="nivel">Maila</label>
            <select name="nivel" id="nivel">
                <option value="Basico" @if($curso->nivel == 'Basico') selected @endif>Basico</option>
                <option value="Intermedio" @if($curso->nivel == 'Intermedio') selected @endif>Intermedio</option>
                <option value="Avanzado" @if($curso->nivel == 'Avanzado') selected @endif>Avanzado</option>
            </select>
        <br>
        <label for="horasAcademicas">Ordu akademikoak</label>
         <input type="text" name="horasAcademicas" id="horasAcademicas" value="{{ $curso->horasAcademicas }}"><br>

        {{-- Irakaslea aukeratu --}}
        <label for="profesor_id">Irakaslea</label>
        <select name="profesor_id" id="profesor_id">
        @foreach ($profesores as $profesor)
            <option value="{{ $profesor->id }}" @if($curso->profesor->id == $profesor->id) selected @endif>{{ $profesor->nombreApellido }}</option>
        @endforeach
        </select>
        <br>
        <button type="submit">Bidali</button>
    </form>

@endsection
