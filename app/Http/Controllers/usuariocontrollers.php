<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Usuario::All();
        return view('usuarios.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->id = $request->id;
        $usuario->ndocumento = $request->ndocumento;
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->celular = $request->celular;
        $usuario->fecha_alta = $request->fecha_alta;
        $usuario->save();
        
        return view('usuarios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editarUsuario = Usuario::find($id);
        return view('usuarios.edit', compact('editUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $id)
    {
        $editarUsuario = Usuario::find($id);
        $editarUsuario->ndocumento = $request->ndocumento;
        $editarUsuario->nombres = $request->nombres;
        $editarUsuario->apellidos = $request->apellidos;
        $editarUsuario->email = $request->email;
        $editarUsuario->celular = $request->celular;
        $editarUsuario->fecha_alta = $request->fecha_alta;
        $editarUsuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarUsuario = Usuario::find($id);
        $eliminarUsuario->delete();
         return back()->with('Mensaje', 'Usuario eliminado');
       // return redirect()->route('usuario.index');
    }
    }