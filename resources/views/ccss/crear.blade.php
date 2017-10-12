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
 <meta name="csrf-token" content="{{ csrf_token() }}">
 {!!Form::open(array('route'=>'insert','id'=>'frmsave','method'=>'post'))!!}

 <div class="col-lg-12">
  <h2 class="page-header">Reportes Caja Costarricense del Seguro Social</h2>
</div>

<div class="form-group col-sm-4">
  Inicio
  <input type="date" name="fInicio[]" class="form-control fInicio" id="inicio">
</div>
<div class="form-group col-sm-4">
  Final
  <input type="date" name="fFinal[]" class="form-control fFinal" id="final">
</div>
<br>
<table class="table table-striped table-responsive" id="tblGrid">
  <thead id="tblHead">
    <tr>
      <th>ID</th>
      <th>Cédula</th>
      <th>Nombre</th>
      <th>Salario Actual</th>
      <th>Total Ingresos</th>
      <th>Comentarios</th>
    </tr>
  </thead>
  @foreach($consulta as $user)
  <tbody>
    <tr>
      <td><input type="text" name="id[]" value="{{$user -> emp_id}}" class="inputPlanillas id" readonly></td>

      <td><input type="text" name="cedula[]" value="{{$user -> emp_ced}}" class="inputPlanillas cedula" readonly></td>

      <td><input type="text" name="nombre[]" value="{{$user -> emp_nomb}}" class="inputPlanillas nombre" readonly></span></td>

      <td><input type="text" name="salario[]" value="{{$user -> emp_sal}}" class="inputPlanillas salario" readonly></td>

      <td><input type="text" name="total[]" value="{{$user -> total}}" class="inputPlanillas total" readonly></td>

      <td><input type="text" name="comentario[]" value="" class="inputPlanillas comentario" readonly></td>
    </tr>
  </tbody>
  @endforeach
  <tr>
    <th scope="row">TOTAL</th>
    <td><strong></strong></td>
    <td><strong></strong></td>
    <td><strong>₡<?php echo $sumCaja;?></strong></td>
    <td><strong class="netos">₡<?php echo $sumSal;?></strong></td>
    <td><strong class="total"></strong></td>
  </tr>
</table>
<div class="col-lg-12">
  {!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
</div>



{!!Form::close()!!}
</div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/caja.js')!!}
@stop