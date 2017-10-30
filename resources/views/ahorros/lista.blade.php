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
    <h2 class="page-header">Lista de Ahorros Semanales</h2>
  </div>
  <table class="table table-striped" id="tblGrid">
    <thead id="tblHead">
      <tr>
        <th>ID Empleado</th>
        <th>Fecha Inicio</th>
        <th>Ultima Modificación</th>
        <th>Monto Semanal</th>
        <th>Monto Actual</th>
        <th>Notas</th>
        <th>Accion</th>
        <th>Descargar</th>
      </tr>
    </thead>
    @foreach($aho as $ahorro)
    <tbody>
      <tr>
        <td>  {{$ahorro -> nomb}}</td>
        <td>  {{$ahorro -> created_at}}</td>
        <td>  {{$ahorro -> updated_at}}</td>
        <td>₡ {{$ahorro -> montoS}}</td>
        <td>₡ {{$ahorro -> montoA}}</td>
        <td>  {{$ahorro -> nota}}</td>
        <td><button type="button" class="btn btn-sucess">{!!link_to_route('ahorros.edit', $title = 'Editar', $parameters = $ahorro->id)!!}</button></td>
        <td><a href="{{ URL::to('downloadExcelAhorros',$parameters = $ahorro->id) }}"><button class="btn btn-success">Descargar</button></a></td>
      </tr>
    </tbody>
    @endforeach
    <tr>
      <th scope="row">TOTAL</th>
      <td></td>
      <td></td>
      <td><strong>₡ {{$montoSemanal}}</strong></td>
      <td><strong>₡ {{$montoActual}}</strong></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
<div class="text-center">
  {!!$aho->render()!!}
</div>
@stop