<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', ['alumnos'=> $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre_ape= $request->nombre_ape;
        $alumno->edad= $request->edad;
        $alumno->telefono= $request->telefono;
        $alumno->direccion= $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.show', $alumno->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($alumno)
    {
        $alumno = Alumno::find($alumno);
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($alumno)
    {
        $alumno = Alumno::find($alumno);
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->nombre_ape= $request->nombre_ape;
        $alumno->edad= $request->edad;
        $alumno->telefono= $request->telefono;
        $alumno->direccion= $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.show', $alumno->id);
    }

    public function confirmar($alumno){
        $alumno = Alumno::find($alumno);
        return view('alumnos.confirmar', compact('alumno'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
