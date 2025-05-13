@extends('layouts.app')

@section('content')
    <h1>Editar Proyecto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $project->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
