<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Producto::All();
    return view('productos.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->id = $request->id;
        $producto->nombre = $request->nombre;
        $producto->codigo = $request->codigo;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->existencia = $request->existencia;
        $producto->save();
        
        return view('productos.create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editProducto = Producto::find($id);
        return view('productos.edit', compact('editProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarProducto = Producto::find($id);
        $editarProducto->nombre = $request->nombre;
        $editarProducto->codigo = $request->codigo;
        $editarProducto->precio = $request->precio;
        $editarProducto->descripcion = $request->descripcion;
        $editarProducto->existencia = $request->existencia;
        $editarProducto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarProducto = Producto::find($id);
        $eliminarProducto->delete();
         return back()->with('Mensaje', 'Producto eliminado');
    }
}
