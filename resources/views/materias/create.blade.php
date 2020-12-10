@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para registro de materias</h3>

    <form action="{{url('/materias')}}" method="POST">
    @csrf 
    <label for="">Numero de materias: </label>
    <input type="text" name="id" placeholder="No. materia" class="form-control mb-2">
    
    <label for="">Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">

    <label for="">Descripcion: </label>
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2">

    <label for="">Instructor: </label>
    <input type="text" name="instructor" placeholder="Instructor" class="form-control mb-2">

    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
    </form>
@endsection  

