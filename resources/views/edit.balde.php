@extends('plantillaweb')

@section('secciondinamica')
<h1>Editar Producto {{$edProducto->id}} </h1>
<form action="{{route('productos.update', $edProducto)}}"  method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <label>Codigo del producto</label>
    <input type="text"  name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$edProducto->Nombre}}">
    
    <label>Nombre del producto</label>
    <input type="text"  name="codigo" placeholder="Codigo" class="form-control mb-2" value="{{$edProducto->Codigo}}">
  
    <label>Descripcion</label>
    <input type="text"  name="descripcion" placeholder="Descripicion" class="form-control mb-2" value="{{$edProducto->descripcion}}">
     
  <button type="submit" class="btn btn-primary btn-block">Insertar</button>
</form>


@endsection
