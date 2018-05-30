@extends('Personas.layout')

@section('contenido')
<form action="{{route('Personas.store')}}" method="post">
  {{csrf_field()}}
  CI: <input type="number" name="ci" class="form-control" required>  
  Nombre: <input type="text" name="nombre" class="form-control" required>  
  APELLIDO: <input type="text" name="apellido" class="form-control" required>  
  EDAD: <input type="number" name="edad" class="form-control" required> 
  <input type="submit" value="REGISTRAR" class="btn btn-principal">
</form>
@stop