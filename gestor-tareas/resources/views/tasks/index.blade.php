@extends('layouts.app')

@section('content')
    <h1>Tareas</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-success mb-3">Crear Tarea</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Proyecto</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Fecha límite</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td>{{ $task->project->name }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <span class="badge 
                            @if($task->status == 'pendiente') bg-warning
                            @elseif($task->status == 'en progreso') bg-primary
                            @else bg-success @endif">
                            {{ ucfirst($task->status) }}
                        </span>
                    </td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">No hay tareas registradas.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
