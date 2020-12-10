@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para registro de usuarios</h3>

    <form action="{{url('/usuarios')}}" method="POST">
    @csrf 
    <label for="">Numero de usuarios: </label>
    <input type="text" name="id" placeholder="No. usuario" class="form-control mb-2">

    <label for="">Numero de documento: </label>
    <input type="text" name="ndocumento" placeholder="ndocumento" class="form-control mb-2">

    <label for="">Nombres: </label>
    <input type="text" name="nombres" placeholder="Nombres" class="form-control mb-2">

    <label for="">Apellidos: </label>
    <input type="text" name="apellidos" placeholder="apellidos" class="form-control mb-2">

    <label for="">Email: </label>
    <input type="text" name="email" placeholder="Email" class="form-control mb-2">

    <label for="">Celular: </label>
    <input type="text" name="celular" placeholder="Celular" class="form-control mb-2">
    
    <label for="">Fecha alta: </label>
    <input type="text" name="fecha_alta" placeholder="Fecha_alta" class="form-control mb-2">


    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
    </form>
@endsection  
