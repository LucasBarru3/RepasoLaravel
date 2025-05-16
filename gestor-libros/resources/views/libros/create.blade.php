@extends('layouts.layout')
@section('title')
Crear Libro
@endsection
@section('content')
    <h2>Creacion de libro</h2>
    <form method="post" action="{{route('libros.store')}}" >
        @csrf
        <input type="text" name="titulo" placeholder="titulo">
        <input type="text" name="descripcion" placeholder="desc">
        <input type="number" name="ano_publicacion" placeholder="año">
        <select name="autor_id" id="">
         @foreach ($autors as $autor)
         <option value="{{$autor->id}}">{{$autor->nombre}}</option>
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