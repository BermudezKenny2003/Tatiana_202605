@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para registro de productos</h3>

    <form action="{{url('/productos')}}" method="POST">
    @csrf 
    <label for="">Numero de productos: </label>
    <input type="text" name="id" placeholder="No. producto" class="form-control mb-2">
    <label for="">Nombre: </label>
    <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2">
    <label for="">Codigo: </label>
    <input type="text" name="codigo" placeholder="codigo" class="form-control mb-2">
    <label for="">Precio: </label>
    <input type="text" name="precio" placeholder="Precio" class="form-control mb-2">
    <label for="">Descripcion: </label>
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2">
    <label for="">Exixtencia: </label>
    <input type="text" name="existencia" placeholder="Existencia" class="form-control mb-2">

    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
    </form>
@endsection  