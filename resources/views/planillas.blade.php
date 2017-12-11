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
  <div class="table-responsive">
   {!!Form::open(array('route'=>'insert','id'=>'frmPlanillas','method'=>'post'))!!}

   <div class="col-lg-12">
    <h2 class="page-header">Planillas</h2>
  </div>

  <div class="form-group col-sm-4">
  <label class="form-group">Inicio</label>
    <input type="date" name="fInicio" class="form-control fInicio">
  </div>
  <div class="form-group col-sm-4">
    <label class="form-group">Final</label>
    <input type="date" name="fFinal" class="form-control fFinal">
  </div>
  <div class="form-group col-sm-4" style="margin-top: 35px;">
 
    <a href="#" class="alert-danger  divMensajeValidacion"></a>
 </div>
 <br>
 <table class="table table-striped">
  <thead id="tblHead">
    <tr>
      <th class="hide">ID</th>
      <th>Cédula</th>
      <th>Nombre</th>
      <th>Cuenta</th>
      <th class="hide">Salario</th>
      <th>Horas</th>
      <th>Horas Extra</th>
      <th>Salario</th>
      <th>Horas Extra</th>
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
      <td class="hide"><input type="text" name="id[]" value="{{$user -> id}}" class="inputPlanillas id" readonly></td>

      <td>{{$user -> numId}}</td>

      <td><input type="text" name="nombre[]" value="{{$user -> nomb}} {{$user -> ape1}}" class="inputPlanillas nombre" readonly></span></td>

      <td><input type="text" name="banco[]" value="{{$user -> cBanc}}" class="inputPlanillas banco" readonly></td>

      <td class="hide"><input type="text" name="salario[]" value="{{$user -> salarioS}}" class="inputPlanillas salario" readonly></td>

      <td><input type="text" value="48" style="max-width: 40px !important;     background: transparent;
        border: none;" name="horasNormal[]" class="horasNormal" id="horasNormal"></td>

        <td><input type="text" value="0" style="max-width: 40px !important;     background: transparent;
          border: none;" name="horasExtra[]" class="horasExtra" id="horasExtra"></td>

          <td><input type="text" value="{{$user -> salarioS}}" name="horasNormal2[]" class="inputPlanillas horasNormal2" readonly></td>

          <td><input type="text" value="" name="horasExtra2[]" class="inputPlanillas horasExtra2" readonly></td>
          <td><input type="text" value="{{$user -> totalVacas}}"  name="vacaciones[]" class="inputPlanillas vacaciones" id="vacaciones" readonly=""></td>

          <td><input type="text" name="caja[]" value="{{$user->caja}}" class="inputPlanillas caja" readonly></td>

          <td class="hide"><input type="text" name="cajaVacas[]" value="{{$user->cajaVacas}}" class="inputPlanillas cajaVacas" readonly></td>

          <td><input type="text" name="prestamos[]" value="{{$user -> totalPrestamos}}" class="inputPlanillas prestamos" readonly></td>

          <td><input type="text" name="vales[]" value="{{$user -> totalVales}}" class="inputPlanillas vales" readonly></td>

          <td><input type="text" name="deducciones[]" value="{{$user -> montoO}}" class="inputPlanillas deducciones" readonly></td>

          <td><input type="text" name="ahorros[]" value="{{$user -> montoS}}" class="inputPlanillas ahorros" readonly></td>

          <td><input type="text" name="neto[]" value="{{$user->neto}}" class="inputPlanillas neto" readonly></td>

          <td><input type="text" name="totales[]" value="{{$user->totales}}" class="inputPlanillas totales" readonly></td>

        </tr>
      </tbody>
      @endforeach
      <tr>
        <th scope="row">TOTAL</th>
        <td><strong></strong></td>
        <td><strong></strong></td>
        <td class="hide"><strong>₡{{$salarios}}</strong></td>
        <td><strong></strong></td>
        <td><strong></strong></td>
        <td><strong class="hN2">₡<?php echo $sumH;?></strong></td>
        <td><strong class="hE2"></strong></td>
        <td><strong>₡{{$vacacionesT}}</strong></td>
        <td>₡<strong class="cajaTotal"><?php echo $sumCaja;?></strong></td>
        <td><strong>₡{{$prestamos}}</strong></td>
        <td><strong>₡{{$vales}}</strong></td>
        <td><strong>₡{{$deducciones}}</strong></td>
        <td><strong>₡{{$ahorros}}</strong></td>
        <td>₡<strong class="netos"><?php echo $sumNeto;?></strong></td>
        <td>₡<strong class="total"><?php echo $sumTotal;?></strong></td>
      </tr>
    </table>
  </div>
  <div class=row>
    <div class="col-lg-12">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Guardar</button>
    </div>
  </div>
  <br>
  <p class="note">Si no aparece un usuario, es por que aún no le ha asignado un salario.</p>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Desea Guardar la Planilla?</h4>
        </div>
        <div class="modal-body">
          <div class="alert alert-warning">
            <p>Se eliminaran todas las otras deducciones y los vales</p>
            <p>Se actualizaran los ahorros y los prestamos</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          {!!Form::submit('Guardar',array('class'=>'btn btn-primary'))!!}
        </div>
      </div>
    </div>
  </div>
  {!!Form::hidden('_token',csrf_token())!!}

  {!!Form::close()!!}
 <!-- <a href="{{ URL::to('downloadPdfPlanillas') }}"><button class="btn btn-danger">PDF</button></a>-->
</div>
@stop