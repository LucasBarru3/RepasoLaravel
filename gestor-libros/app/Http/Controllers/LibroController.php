<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;
class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::orderBy('id', 'desc')->simplePaginate();
        return view('libros.index',['libros'=> $libros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autors = Autor::all();
        return view('libros.create', compact('autors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'descripcion'=> 'required|min:10',
            'ano_publicacion'=> 'required',
            'autor_id'=> 'required'
        ]);
        $libro = new Libro();
        $libro->titulo= $request->titulo;
        $libro->descripcion= $request->descripcion;
        $libro->ano_publicacion= $request->ano_publicacion;
        $libro->autor_id= $request->autor_id;
        $libro->save();
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($libro)
    {
        $libro = Libro::find($libro);
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($libro)
    {
        $libro = Libro::find($libro);
        $autorOriginal = Autor::find($libro->id);
        $autors = Autor::all();
        return view('libros.edit', data: compact('libro','autors', 'autorsOriginal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmar($id){
        $libro = Libro::find($id);
        return view('libros.confirmar', compact('libro'));
    }
    public function destroy($libro)
    {
        $libro = Libro::find($libro);
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
