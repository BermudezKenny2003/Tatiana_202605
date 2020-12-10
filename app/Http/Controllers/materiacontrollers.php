<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Materia::All();
        return view('materias.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Materia;

        $materia->id = $request->id;
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;
        $materia->instructor = $request->instructor;
        $materia->save();
        
        return view('materias.create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editMateria = Materia::find($id);
        return view('materias.edit', compact('editMateria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarMateria = Materia::find($id);
        $editarMateria->nombre = $request->nombre;
        $editarMateria->descripcion = $request->descripcion;
        $editarMateria->instructor = $request->instructor;
        $editarMateria->save();

        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarMateria = Materia::find($id);
        $eliminarMateria->delete();
         return back()->with('Mensaje', 'Materia eliminada');
       // return redirect()->route('materias.index');
    }
}