@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para registros de un laboratorio</h3>

    <form action="{{url('/laboratorios')}}" method="POST">
    @csrf 
    <label for="">Numero de laboratorio: </label>
    <input type="text" name="id" placeholder="No. apartamento" class="form-control mb-2">

    <label for="">Productos: </label>
    <input type="text" name="productos" placeholder="Productos" class="form-control mb-2">
    
    <label for="">Ventas: </label>
    <input type="text" name="ventas" placeholder="Ventas" class="form-control mb-2">

    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
    </form>
@endsection 
