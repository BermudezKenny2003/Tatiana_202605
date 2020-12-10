<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;

class apartamentocontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $datos = Apartamento::All();
    return view('apartamentos.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('apartamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $apartamento = new Apartamento;

   $apartamento->id = $request->id;
   $apartamento->direccion = $request->direccion;
   $apartamento->barrio = $request->barrio;
   $apartamento->save();
   
   return view('apartamentos.create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function show(Apartamento $apartamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $editApartamento = Apartamento::find($id);
    return view('apartamentos.edit', compact('editApartamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarApartamento = Apartamento::find($id);
        $editarApartamento->direccion = $request->direccion;
        $editarApartamento->barrio = $request->barrio;
        $editarApartamento->save();

        return redirect()->route('apartamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarApartamento = Apartamento::find($id);
        $eliminarApartamento->delete();
         return back()->with('Mensaje', 'Apartamento se elimino');
       // return redirect()->route('apartamentos.index');
    }
}