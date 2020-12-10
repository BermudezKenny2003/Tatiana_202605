@extends('Plantilla')
@section('secciondinamica')
    <h1>Lista de apartamentos terminados</h1>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Codigo</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Existencia</th>
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->codigo}}</td>
      <td>{{$dato->nombre}}</td>
      <td>{{$dato->precio}}</td>
      <td>{{$dato->descripcion}}</td>
      <td>{{$dato->existencia}}</td>
      <td>
      <a href="{{url('productos/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('productos.destroy', $dato) }}" class="d-inline" method="POST">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
      </form>
    
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection