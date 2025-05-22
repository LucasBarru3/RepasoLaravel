<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->simplePaginate();
        return view('cursos.index', ['cursos'=> $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($curso)
    {
        $curso = Curso::find($curso);
        return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmar($curso){
        $curso = Curso::find($curso);
        return view('cursos.confirmar', compact('curso'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($curso)
    {
        $curso = Curso::find($curso);
        $curso->delete();
        $cursos = Curso::all();
        return redirect()->route('cursos.index');
    }
}
