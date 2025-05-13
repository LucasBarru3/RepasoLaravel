@extends('layouts.app')

@section('content')
    <h1>Crear Tarea</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="project_id" class="form-label">Proyecto</label>
            <select name="project_id" class="form-control" required>
                <option value="">-- Selecciona un proyecto --</option>
                @foreach($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Estado</label>
            <select name="status" class="form-control" required>
                <option value="pendiente">Pendiente</option>
                <option value="en progreso">En progreso</option>
                <option value="completada">Completada</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Fecha límite</label>
            <input type="date" name="due_date" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Tarea</button>
    </form>
@endsection
