@extends('layouts.alumnos')
@section('title', 'Ikasle aldaketa')

@section('content')

    <h1>IKASLE --{{ $alumno->nombre }}-- </h1>

    <form method="post" action="{{ route('alumnos.update', $alumno) }}">
        @csrf
        @method('PUT')
        Izen Abizena <input type="text" name="nombre" value="{{ old('nombre',$alumno->nombre) }}"><br>
        @error('nombre')
            <p>{{ $message }}</p>
         @enderror
        Adina <input type="text" name="edad" value="{{ old('edad',$alumno->edad) }}"><br>
        @error('edad')
            <p>{{ $message }}</p>
        @enderror
        Telefonoa <input type="text" name="telefono" value="{{ $alumno->telefono }}"><br>
        Helbidea<input type="text" name="direccion"  value="{{ $alumno->direccion }}"><br>
        <button type="submit">Bidali aldaketak</button>
    </form>


@endsection
