
@extends('layouts.principal')

@section('content')
<div class="row">


  <meta name="csrf-token" content="{{ csrf_token() }}">

  <div class="col-lg-12">
    <h2 class="page-header">Planillas</h2>
  </div>
  <div class="form-group col-sm-4">
    Inicio
    {!!Form::date('fechaIni',null,['class'=>'form-control','id'=>'inicio'])!!}
  </div>
  <div class="form-group col-sm-4">
    Final
    {!!Form::date('fechaIni',null,['class'=>'form-control','id'=>'final'])!!}
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
    @foreach($consulta as $user)
    <tbody>
      <tr>
        <td><span id="id" >{{$user -> id}}</span></td>
        <td><span id="cedula">{{$user -> numId}}</span></td>
        <td><span id="nombre">{{$user -> nomb}}</span></td>
        <td><span id="banco">{{$user -> cBanc}}</span></td>
        <td><span id="salario">{{$user -> salarioS}}</span></td>
        <td><input data-id='<?php echo $user -> id;?>' type="number" value="40" style="max-width: 50px !important" id="horasNormal"></td>
        <td><input data-id='<?php echo $user -> id;?>' type="number" value="0" style="max-width: 50px !important" id="horasExtra"></td>
        <td><span id="vacaciones">{{$user -> totalVacas}}</span></td>
        <td><span id="caja">{{$user->caja}}</span></td>
        <td><span id="prestamos">{{$user -> montoP}}</span></td>
        <td><span id="vales">{{$user -> totalVales}}</span></td>
        <td><span id="deducciones">{{$user -> montoO}}</span></td>
        <td><span id="ahorros">{{$user -> montoS}}</span></td>
        <td><span id="neto<?php echo $user -> id;?>">{{$user->neto}}</span></td>
        <td><span id="totales<?php echo $user -> id;?>">{{$user->totales}}</span></td>
      </tr>
    </tbody>
    @endforeach
    <tr>
      <th scope="row">TOTAL</th>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong>₡{{$salarios}}</strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong>₡{{$vacaciones}}</strong></td>
      <td><strong>₡<?php echo $sumCaja;?></strong></td>
      <td><strong>₡{{$prestamos}}</strong></td>
      <td><strong>₡{{$vales}}</strong></td>
      <td><strong>₡{{$deducciones}}</strong></td>
      <td><strong>₡{{$ahorros}}</strong></td>
      <td><strong>₡<?php echo $sumNeto;?></strong></td>
      <td><strong>₡<?php echo $sumTotal;?></strong></td>
    </tr>
  </table>
  <p class="note">Si no aparece un usuario, es por que aún no le ha asignado un salario.</p>

  {!!Html::script('js/jquery.js')!!}

  {!!Html::script('js/planillas.js')!!}
</div>
@stop



