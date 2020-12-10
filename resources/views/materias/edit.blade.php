@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para Editar Materia No. {{$editMateria->id}}</h3>

    <form action="{{route('materias.update', $editMateria)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    
    <label for="">Numero de materias: </label>
    <input type="text" name="id" placeholder="No. estudiante" class="form-control mb-2" value = "{{$editMateria->id}}">
    
    <label for="">Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value = "{{$editMateria->nombre}}">
    
    <label for="">Descripcion: </label>
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value = "{{$editMateria->descripcion}}">

    <label for="">Instructor: </label>
    <input type="text" name="instructor" placeholder="Instructor" class="form-control mb-2" value = "{{$editMateria->instructor}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection 