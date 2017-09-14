@extends('layouts.principal')

@section('content')
@if(Session::has('message'))
<br>
<div class="alert alert-success" role="alert">
  <a href="#" class="alert-link"></a>
  {{Session::get('message')}}
</div>
@endif
<div class="row">

  <div class="col-lg-12">
    <h2 class="page-header">Lista de Reportes a la Caja</h2>
  </div>
  <table class="table table-striped" id="tblGrid">
    <thead id="tblHead">
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Cédula</th>
        <th>Puesto</th>
        <th>Salario Actual</th>
        <th>Total Ingresos</th>
        <th>Comentarios</th>
        <th>Accion</th>
      </tr>
    </thead>
    @foreach($users as $user)
    <tbody>
      <tr>
        <td>{{$user -> nomb}}</td>
        <td>{{$user -> ape1}} {{$user -> ape2}}</td>
        <td>{{$user -> numId}}</td>
        <td>{{$user -> nombD}}</td>
        <td>{{$user -> salarioM}}</td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn btn-sucess">EDITAR</button></td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>


@stop