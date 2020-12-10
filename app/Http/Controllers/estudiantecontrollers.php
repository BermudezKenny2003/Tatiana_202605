<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class estudiantecontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Estudiante::All();
        return view('estudiantes.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante;

        $estudiante->id = $request->id;
        $estudiante->ndocumento = $request->ndocumento;
        $estudiante->nombres = $request->nombres;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->email = $request->email;
        $estudiante->celular = $request->celular;
        $estudiante->perfil = $request->perfil;
        $estudiante->save();
        
        return view('estudiantes.create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEstudiante = Estudiante::find($id);
        return view('estudiantes.edit', compact('editEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarEstudiante = Estudiante::find($id);
        $editarEstudiante->ndocumento = $request->ndocumento;
        $editarEstudiante->nombres = $request->nombres;
        $editarEstudiante->apellidos = $request->apellidos;
        $editarEstudiante->email = $request->email;
        $editarEstudiante->celular = $request->celular;
        $editarEstudiante->perfil = $request->perfil;
        $editarEstudiante->save();

        return redirect()->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarEstudiante = Estudiante::find($id);
        $eliminarEstudiante->delete();
         return back()->with('Mensaje', 'Estudiante  eliminado');
       // return redirect()->route('estudiantes.index');
    }
}