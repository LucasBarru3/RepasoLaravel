@extends('layouts.alumnos')
@section('title', 'Ikasle bat ikusi')

@section('content')

        <h2>EZABATU KONFIRMAZIOA </h2>
        <p>Ziur zaude <strong> {{ $alumno->nombre }}</strong> ezabatu nahi duzula? </p>

         <form action="{{ route('alumnos.destroy',$alumno) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">EZABATU</button>
            <a href="{{route('alumnos.index')}}">
                Cancel
            </a>
        </form>
@endsection
