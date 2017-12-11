@extends('layouts.principal')

@section('content')
<!-- Team Members Row -->
<div class="row">
  <div class="col-lg-12">
   <h2 class="page-header">Nuevo Ahorro</h2>
 </div>
 <!-- 'route'=>'empleados.emp', -->
 {!!Form::open(['route'=>'ahorros.store','method'=>'POST'])!!}
 <div class="row">
  <div class="col-md-6">
   {!!Form::label('Nombre del Empleado:')!!}
    <div class="input-group">
     <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
   {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Digite el nombre del empleado','id'=>'emp'])!!}
   </div>
 </div>
 <div class="hidden">
   {!!Form::text('emp_id',null,['class'=>'hidden','id' => 'id'])!!}
 </div>
 <div class="form-group col-sm-6">
  {!!Form::label('Monto del Ahorro por Semana:')!!}
  {!!Form::text('montoS',null,['class'=>'form-control'])!!}
</div>
</div>
<div class="row">

  <div class="form-group col-sm-6">
    {!!Form::text('montoA',0,['class'=>'hidden'])!!}
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-12">
    {!!Form::label('Notas:')!!}
    {!!Form::text('nota',null,['class'=>'form-control','placeholder'=>'Ingrese las notas a considerar'])!!}
  </div>
</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
<hr class="divisor">
</div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/jqueryui.js')!!}
{!!Html::script('js/autocomplete.js')!!}
@stop
