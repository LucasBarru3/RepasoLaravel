<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Profesor;

class CursoController extends Controller
{

    public function index(){
        $cursos = Curso::all();

         return view('cursos.index', compact('cursos'));
     }


    public function create()
    {
        $profesores = Profesor::all();
        return view('cursos.create', compact('profesores'));

    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horasAcademicas = $request->horasAcademicas;
        $curso->profesor_id = $request->profesor_id;
        $curso->save();

        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Curso $curso){
        $profesores = Profesor::all();

        return view('cursos.edit', compact('curso','profesores'));
    }


    public function update(Request $request, Curso $curso)
    {
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horasAcademicas = $request->horasAcademicas;
        $curso->profesor_id = $request->profesor_id;
        $curso->save();

        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')
            ->with('success','El curso se ha borrado correctamente');
    }
}
