@extends('layouts.alumnos')
@section('title', 'Ikastaroan zerrenda')

@section('content')

    <h2>IKASTARO ZERRENDA</h2>

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
            <th>Maila</th>
            <th>Orduak</th>
            <th>Irakaslea</th>
            <th>Aldatu</th>
            <th>Ezabatu</th>
        </tr>

    @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->nombre }}&nbsp;&nbsp;</td>
            <td>{{ $curso->nivel }}&nbsp;&nbsp;</td>
            <td>{{ $curso->horasAcademicas }}&nbsp;&nbsp;</td>
            <td>{{ $curso->profesor->nombreApellido }}</td>
            <td><a href="{{ route('cursos.edit', $curso->id) }}">Aldatu</a></td>
            <td>
                <form action="{{ route('cursos.destroy',$curso) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">EZABATU</button>
                </form>

            </td>
        </tr>

     @endforeach

    </table>

@endsection
