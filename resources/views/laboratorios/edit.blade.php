@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para Editar Laboratorio No. {{$editLaboratorio->id}}</h3>

    <form action="{{route('laboratorios.update', $editLaboratorio)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    
    <label for="">Numero de Laboratorio: </label>
    <input type="text" name="id" placeholder="No. laboratorio" class="form-control mb-2" value = "{{$editLaboratorio->id}}">
    
    <label for="">Productos: </label>
    <input type="text" name="productos" placeholder="Productos" class="form-control mb-2" value = "{{$editLaboratorio->productos}}">
    
    <label for="">Ventas: </label>
    <input type="text" name="ventas" placeholder="Ventas" class="form-control mb-2" value = "{{$editLaboratorio->ventas}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection