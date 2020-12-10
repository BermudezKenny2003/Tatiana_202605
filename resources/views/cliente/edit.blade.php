@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para Editar Apartamento No. {{$editCliente->id}}</h3>

    <form action="{{route('clientes.update', $editCliente)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    
    <label for="">Numero de clientes: </label>
    <input type="text" name="id" placeholder="No. cliente" class="form-control mb-2" value = "{{$editCliente->id}}">
    
    <label for="">Numero de documento: </label>
    <input type="text" name="ndocumento" placeholder="ndocumento" class="form-control mb-2" value = "{{$editCliente->ndocumento}}">

    <label for="">Nombres: </label>
    <input type="text" name="nombres" placeholder="Nombres" class="form-control mb-2" value = "{{$editCliente->nombres}}">

    <label for="">Apellidos: </label>
    <input type="text" name="apellidos" placeholder="Apellidos" class="form-control mb-2" value = "{{$editCliente->apellidos}}">

    <label for="">Email: </label>
    <input type="text" name="email" placeholder="Email" class="form-control mb-2" value = "{{$editCliente->email}}">
    
    <label for="">Celular: </label>
    <input type="text" name="celular" placeholder="Celular" class="form-control mb-2" value = "{{$editCliente->celular}}">

    <label for="">Perfil: </label>
    <input type="text" name="perfil" placeholder="Perfil" class="form-control mb-2" value = "{{$editCliente->perfil}}">

    <label for="">Direccion: </label>
    <input type="text" name="direccion" placeholder="Direccion" class="form-control mb-2" value = "{{$editCliente->direccion}}">

    <label for="">Barrio: </label>
    <input type="text" name="barrio" placeholder="Barrio" class="form-control mb-2" value = "{{$editCliente->barrio}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection 