@extends('layouts.alumnos')
@section('title', 'Ikasleen zerrenda')

@section('content')

    <h2>IKASLEEN ZERRENDA</h2>


    <table style="border:1px solid">
        <tr>
            <th>Argazkia</th>
            <th>Izen abizena</th>
            <th>Adina</th>
            <th>Telefonoa</th>
            <th>Helbidea</th>
            <th>ALDATU</th>
            <th>EZABATU</th>
        </tr>


    @foreach ($alumnos as $alumno)

        <tr>
            <td>

            @if ($alumno->foto)
<img src="{{ asset(str_replace('public/', 'storage/', $alumno->foto)) }}"
     alt="foto"
     width="25" height="25">
            @else
                <img src="{{ url('storage/alumnos/alumno.png') }}" alt="" width="25px" height="25px"/>
            @endif


            </td>
            <td><a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->nombre }}</a></td>
            <td>{{ $alumno->edad }}</td>
            <td>{{ $alumno->telefono }}</td>
            <td>{{ $alumno->direccion }}</td>
            <td><a href="{{ route('alumnos.edit', $alumno->id) }}">Edit</a></td>
            <td><a href="{{ route('alumnos.confirm', $alumno->id) }}">Delete</a></td>
        </tr>


     @endforeach

    </table>
    {{ $alumnos->links() }}
@endsection
