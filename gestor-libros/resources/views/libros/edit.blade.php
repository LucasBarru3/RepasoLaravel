@extends('layouts.layout')
@section('title')
Crear Libro
@endsection
@section('content')
    <h2>Creacion de libro</h2>
    <form method="post" action="{{route('libros.update', $libro)}}" >
        @csrf
        @method('put')
        <input type="text" name="titulo" placeholder="titulo" value="{{$libro->titulo}}">
        <input type="text" name="descripcion" placeholder="desc" value="{{$libro->descripcion}}">
        <input type="number" name="ano_publicacion" placeholder="año" value="{{$libro->ano_publicacion}}">
        <select name="autor_id" id="">
        @foreach ($autors as $autor)
            <option value="{{$autor->id}}" {{ $autor->id == $autorOriginal->id ? 'selected' : '' }}>
                {{$autor->nombre}}
            </option>
        @endforeach
        </select>
        <input type="submit">
        @error('titulo')
        <p>{{$message}}</p>
        @enderror
        @error('descripcion')
        <p>{{$message}}</p>
        @enderror
        @error('ano_publicacion')
        <p>{{$message}}</p>
        @enderror
        @error('autor_id')
        <p>{{$message}}</p>
        @enderror
    </form>
@endsection