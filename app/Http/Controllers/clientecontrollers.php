<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $datos = Cliente::All();
    return view('clientes.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->id = $request->id;
        $cliente->Ndocumento = $request->ndocumento;
        $cliente->Nombres = $request->nombres;
        $cliente->Apellidos = $request->apellidos;
        $cliente->Email = $request->email;
        $cliente->Celular = $request->celular;
        $cliente->Perfil = $request->perfil;
        $cliente->Direccion = $request->direccion;
        $cliente->Barrio = $request->barrio;
        $cliente->save();
        
        return view('clientes.create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editCliente = Cliente::find($id);
        return view('clientes.edit', compact('editCliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarCliente = Cliente::find($id);
        $editarCliente->Ndocumento = $request->ndocumento;
        $editarCliente->Nombres = $request->nombres;
        $editarCliente->Apellidos = $request->apellidos;
        $editarCliente->Email = $request->email;
        $editarCliente->Celular = $request->celular;
        $editarCliente->Perfil = $request->perfil;
        $editarCliente->Direccion = $request->direccion;
        $editarCliente->Barrio = $request->barrio;
        $editarCliente->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarCliente = Cliente::find($id);
        $eliminarCliente->delete();
         return back()->with('Mensaje', 'Cliente eliminado');
       // return redirect()->route('cliente.index');
    }
}