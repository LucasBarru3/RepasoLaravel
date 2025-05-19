<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Http\Requests\StoreAlumno;
use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{

    public function index(){
       // $alumnos = Alumno::all();
        // $alumnos = Alumno::paginate();
        $alumnos = Alumno::orderBy('id','desc')->paginate();
        return view('alumnos.index', compact('alumnos'));
    }


    public function show($alumno){
        $alumno = Alumno::find($alumno);
        return view('alumnos.show', compact('alumno'));
    }


    public function create(){
        return view('alumnos.create');
    }

    public function store(StoreAlumno $request)
{
    $alumno = new Alumno();
    $alumno->nombre    = $request->nombre;
    $alumno->edad      = $request->edad;
    $alumno->telefono  = $request->telefono;
    $alumno->direccion = $request->direccion;

    // ─────────── FOTOS ───────────
    $url = null; // valor por defecto

    if ($request->hasFile('foto')) {
        $url = Storage::putFile('public/alumnos', $request->file('foto'));
    }

    $alumno->foto = $url; // null o ruta

    $alumno->save();

    return redirect()->route('alumnos.show', $alumno);
}


    //  public function edit($alumno){
    //     $alumno = Alumno::find($alumno);
    //     return view('alumnos.edit', compact('alumno'));
    // }

    //Si al recoger la variable alumno, le pongo Alumno por delante, Laravel entiende que $alumno es una instancia de la clase Alumno
    // Lo mismo podemos hacer eb show

    public function edit(Alumno $alumno){
        return view('alumnos.edit', compact('alumno'));
    }


    public function update(StoreAlumno $request, Alumno $alumno){

        // $request->validate([
        //     'nombre' => 'required|min:5',
        //     'edad' => 'required'
        // ]);

        $alumno->nombre = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();

        return redirect()->route('alumnos.index');
    }

    public function confirm(Alumno $alumno){
        return view('alumnos.confirm', compact('alumno'));
    }

    public function destroy(Alumno $alumno){
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }

}
