@extends('layouts.principal')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h2 class="page-header">Planillas</h2>
  </div>
  <div class="form-group col-sm-4">
    Inicio
  </div>
  <div class="form-group col-sm-4">
    Final
  </div>
  <br>
  <table class="table table-striped table-responsive" id="tblGrid">
    <thead id="tblHead">
      <tr>
        <th>ID</th>
        <th>Cédula</th>
        <th>Nombre</th>
        <th>Cuenta</th>
        <th>Salario</th>
        <th>Horas</th>
        <th>Horas E</th>
        <th>Vacaciones</th>
        <th>C.C.S.S</th>
        <th>Prestamos</th>
        <th>Vales</th>
        <th>Otros</th>
        <th>Ahorros</th>
        <th>Neto</th>
        <th>Total</th>
      </tr>
    </thead>
    @foreach($pla as $user)
    <tbody>
      <tr>
        <td><span id="id" >{{$user -> emp_id}}</span></td>
        <td><span id="cedula">{{$user -> emp_ced}}</span></td>
        <td><span id="nombre">{{$user -> emp_nomb}}</span></td>
        <td><span id="banco">{{$user -> emp_anc}}</span></td>
        <td><span id="salario">{{$user -> emp_sal}}</span></td>
        <td><span id="h">{{$user -> emp_hN}}</span></td>
        <td><span id="hE">{{$user -> emp_hE}}</span></td>
        <td><span id="vacaciones">{{$user -> emp_vac}}</span></td>
        <td><span id="caja">{{$user-> emp_caj}}</span></td>
        <td><span id="prestamos">{{$user -> emp_pre}}</span></td>
        <td><span id="vales">{{$user -> emp_val}}</span></td>
        <td><span id="deducciones">{{$user -> emp_ded}}</span></td>
        <td><span id="ahorros">{{$user -> emp_aho}}</span></td>
        <td><span id="neto">{{$user->emp_net}}</span></td>
        <td><span id="totales">{{$user->emp_tot}}</span></td>
      </tr>
    </tbody>
    @endforeach
    <tr>
      <th scope="row">TOTAL</th>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong>₡</strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong>₡</strong></td>
      <td><strong>₡</strong></td>
      <td><strong>₡</strong></td>
      <td><strong>₡</strong></td>
      <td><strong>₡</strong></td>
      <td><strong>₡</strong></td>
      <td><strong>₡</strong></td>
      <td><strong>₡</strong></td>
    </tr>
  </table>
</div>
  {!!$pla->render()!!}
@stop
