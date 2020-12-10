@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para registro de apartamentos</h3>

    <form action="{{url('/apartamentos')}}" method="POST">
    @csrf 
    <label for="">Numero de apartamento: </label>
    <input type="text" name="id" placeholder="No. apartamento" class="form-control mb-2">
    <label for="">Dirección: </label>
    <input type="text" name="direccion" placeholder="Dirección" class="form-control mb-2">
    <label for="">Barrio: </label>
    <input type="text" name="barrio" placeholder="Barrio" class="form-control mb-2">

    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
    </form>
@endsection  
