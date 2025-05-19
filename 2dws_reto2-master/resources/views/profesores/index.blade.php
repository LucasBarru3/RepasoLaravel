@extends('layouts.alumnos')
@section('title', 'Irakasleen zerrenda')

@section('content')

    <h2>IRAKASLEEN ZERRENDA</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table style="border:1px solid">
        <tr>
            <th>Izen abizena</th>
            <th>Lanbidea</th>
            <th>Grado akademikoa</th>
            <th>Telefonoa</th>
            <th>Aldatu</th>
            <th>Ezabatu</th>
        </tr>

    @foreach ($profesores as $profesor)
        <tr style="background-color: burlywood">
            <td>{{ $profesor->nombreApellido }}&nbsp;&nbsp;</td>
            <td>{{ $profesor->profesion }}&nbsp;&nbsp;</td>
            <td>{{ $profesor->gradoAcademico }}&nbsp;&nbsp;</td>
            <td>{{ $profesor->telefono }}</td>
            <td><a href="{{ route('profesores.edit', $profesor) }}">Aldatu</a></td>
            <td>
                <form action="{{ route('profesores.destroy',$profesor) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">EZABATU</button>
                </form>

            </td>
        </tr>

        @if($profesor->cursos->isNotEmpty())
                <tr><td colspan="6">IKASTAROAK</td></tr>

                @foreach ($profesor->cursos as $curso_profe)
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>{{ $curso_profe->nombre }}&nbsp;&nbsp;</td>
                        <td>{{ $curso_profe->nivel }}&nbsp;&nbsp;</td>
                        <td>{{ $curso_profe->horasAcademicas }}</td>
                        <td colspan="2">&nbsp;&nbsp;</td>
                    </tr>

                 @endforeach
        @endif
     @endforeach

    </table>

@endsection
