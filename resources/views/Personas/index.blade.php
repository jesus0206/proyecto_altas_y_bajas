@extends('Personas.layout')

@section('contenido')
<table class="table">
  <thead>
    <th>CI</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>EDAD</th>
    <th>ACCION</th>
  </thead>
  @foreach($personas as $persona)
    <tr>
      <td>{{$persona->ci}}</td>
      <td>{{$persona->nombre}}</td>
      <td>{{$persona->apellido}}</td>
      <td>{{$persona->edad}}</td>
      <td><form action="{{route('Personas.destroy',$persona->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('delete')}}
        <input type="submit" value="ELIMINAR" class="btn btn-danger">
      </form></td>
    </tr>
    @endforeach
</table>
@stop