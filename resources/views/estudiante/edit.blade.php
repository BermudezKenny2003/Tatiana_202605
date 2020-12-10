@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para Editar Estudiante No. {{$editEstudiante->id}}</h3>

    <form action="{{route('estudiantes.update', $editEstudiante)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    
    <label for="">Numero de estudiante: </label>
    <input type="text" name="id" placeholder="No. estudiante" class="form-control mb-2" value = "{{$editEstudiante->id}}">
    
    <label for="">Numero de documento: </label>
    <input type="text" name="ndocumento" placeholder="ndocumento" class="form-control mb-2" value = "{{$editEstudiante->ndocumento}}">
    
    <label for="">Nombres: </label>
    <input type="text" name="nombres" placeholder="Nombres" class="form-control mb-2" value = "{{$editEstudiante->nombres}}">

    <label for="">Apellidos: </label>
    <input type="text" name="apellidos" placeholder="Apellidos" class="form-control mb-2" value = "{{$editEstudiante->apellidos}}">

    <label for="">Email: </label>
    <input type="text" name="email" placeholder="Email" class="form-control mb-2" value = "{{$editEstudiante->email}}">

    <label for="">Celular: </label>
    <input type="text" name="celular" placeholder="Celular" class="form-control mb-2" value = "{{$editEstudiante->celular}}">

    <label for="">Perfil: </label>
    <input type="text" name="perfil" placeholder="Perfil" class="form-control mb-2" value = "{{$editEstudiante->perfil}}">
    
    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection 