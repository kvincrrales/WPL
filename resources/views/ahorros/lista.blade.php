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
                <h2 class="page-header">Lista de Ahorros</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>ID Empleado</th>
                  <th>Fecha Inicio</th>
                  <th>Monto Semanal</th>
                  <th>Monto Actual</th>
                  <th>Notas</th>
                  <th>Accion</th>
                </tr>
            </thead>
              <tbody>
                      <tr>
                      <td>1-15570079</td>
                      <td>26-10-2016</td>
                      <td>₡ 5000</td>
                      <td>₡ 25000</td>
                      <td>Ninguna</td>
                      <td>EDITAR</td>
                      </tr>
              </tbody>
            </table>
</div>
@stop