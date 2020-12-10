@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para Editar Producto No. {{$editProducto->id}}</h3>

    <form action="{{route('productos.update', $editProducto)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    
    <label for="">Numero de productos: </label>
    <input type="text" name="id" placeholder="No. producto" class="form-control mb-2" value = "{{$editProducto->id}}">
    
    <label for="">Nombre: </label>
    <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2" value = "{{$editProducto->nombre}}">

    <label for="">Codigo: </label>
    <input type="text" name="codigo" placeholder="codigo" class="form-control mb-2" value = "{{$editProducto->codigo}}">

    <label for="">Precio: </label>
    <input type="text" name="precio" placeholder="Precio" class="form-control mb-2" value = "{{$editProducto->precio}}">
    
    <label for="">Descripcion: </label>
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value = "{{$editProducto->descripcion}}">

    <label for="">Existencia: </label>
    <input type="text" name="existencia" placeholder="Existencia" class="form-control mb-2" value = "{{$editProducto->Existencia}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection 