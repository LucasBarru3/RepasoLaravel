<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'nombre_usuario' => 'required|min:5',
            'comentario'=> 'required|min:10',
            'valoracion'=> 'required',
            'libro_id'=> 'required'
        ]);
        $opinion = new Opinion();
        $opinion->nombre_usuario= $request->nombre_usuario;
        $opinion->comentario= $request->comentario;
        $opinion->valoracion= $request->valoracion;
        $opinion->libro_id= $request->libro_id;
        $opinion->save();
        return redirect()->route('libros.show', $request->libro_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
