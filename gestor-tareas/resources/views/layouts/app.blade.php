<!DOCTYPE html>
<html>
<head>
    <title>Gestor de Proyectos y Tareas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <nav class="mb-4">
        <a href="{{ route('projects.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Tareas</a>
    </nav>
    @yield('content')
</div>
</body>
</html>
