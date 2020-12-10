@extends('Plantilla')
@section('secciondinamica')
    <h1>Lista de laboratorios</h1>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Productos</th>
      <th scope="col">Ventas</th>
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->productos}}</td>
      <td>{{$dato->ventas}}</td>
      <td>
      <a href="{{url('laboratorios/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('laboratorios.destroy', $dato) }}" class="d-inline" method="POST">
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