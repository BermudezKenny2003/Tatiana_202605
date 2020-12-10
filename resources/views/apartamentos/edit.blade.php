@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para Editar Apartamento No. {{$editApartamento->id}}</h3>

    <form action="{{route('apartamentos.update', $editApartamento)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    
    <label for="">Numero de apartamento: </label>
    <input type="text" name="id" placeholder="No. apartamento" class="form-control mb-2" value = "{{$editApartamento->id}}">
    
    <label for="">Dirección: </label>
    <input type="text" name="direccion" placeholder="Dirección" class="form-control mb-2" value = "{{$editApartamento->direccion}}">
    
    <label for="">Barrio: </label>
    <input type="text" name="barrio" placeholder="Barrio" class="form-control mb-2" value = "{{$editApartamento->barrio}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection 