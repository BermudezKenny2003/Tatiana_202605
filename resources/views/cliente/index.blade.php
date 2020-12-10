@extends('Plantilla')
@section('secciondinamica')
    <h1>Lista de clientes registrados</h1>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">ndocumento</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Email</th>
      <th scope="col">Celular</th>
      <th scope="col">Perfil</th>
      <th scope="col">Direccion</th>
      <th scope="col">Barrio</th>
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->ndocumento}}</td>
      <td>{{$dato->nombres}}</td>
      <td>{{$dato->apellidos}}</td>
      <td>{{$dato->email}}</td>
      <td>{{$dato->celular}}</td>
      <td>{{$dato->perfil}}</td>
      <td>{{$dato->direccion}}</td>
      <td>{{$dato->barrio}}</td>
      <td>
      <a href="{{url('clientes/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('clientes.destroy', $dato) }}" class="d-inline" method="POST">
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