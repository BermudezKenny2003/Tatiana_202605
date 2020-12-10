@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para Editar Usuario No. {{$editUsuario->id}}</h3>

    <form action="{{route('usuarios.update', $editUsuario)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    
    <label for="">Numero de usuarios: </label>
    <input type="text" name="id" placeholder="No. usuario" class="form-control mb-2" value = "{{$editUsuario->id}}">
    
    <label for="">Numero de documento: </label>
    <input type="text" name="ndocumento" placeholder="ndocumento" class="form-control mb-2" value = "{{$editUsuario->numdocumento}}">

    <label for="">Nombres: </label>
    <input type="text" name="nombres" placeholder="Nombres" class="form-control mb-2" value = "{{$editUsuario->nombres}}">

    <label for="">Apellidos: </label>
    <input type="text" name="apellidos" placeholder="Apellidos" class="form-control mb-2" value = "{{$editUsuario->apellidos}}">

    <label for="">Email: </label>
    <input type="text" name="email" placeholder="Email" class="form-control mb-2" value = "{{$editUsuario->email}}">
    
    <label for="">Celular: </label>
    <input type="text" name="celular" placeholder="Celular" class="form-control mb-2" value = "{{$editUsuario->celular}}">

    <label for="">Fecha alta: </label>
    <input type="text" name="fecha_alta" placeholder="Fecha_alta" class="form-control mb-2" value = "{{$editUsuario->fecha_alta}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection 