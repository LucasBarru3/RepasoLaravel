<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller {
    public function index() {
        $tasks = Task::with('project')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create() {
        $projects = Project::all();
        return view('tasks.create', compact('projects'));
    }

    public function store(Request $request) {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:pendiente,en progreso,completada',
            'due_date' => 'nullable|date',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea creada correctamente.');
    }

    public function edit(Task $task) {
        $projects = Project::all();
        return view('tasks.edit', compact('task', 'projects'));
    }

    public function update(Request $request, Task $task) {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:pendiente,en progreso,completada',
            'due_date' => 'nullable|date',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada correctamente.');
    }

    public function destroy(Task $task) {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada correctamente.');
    }
}
