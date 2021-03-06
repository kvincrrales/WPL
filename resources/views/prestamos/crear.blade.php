@extends('layouts.principal')

@section('content')
<!-- Team Members Row -->
<div class="row">
   <div class="col-lg-12">
      <h2 class="page-header">Registrar Prestamos</h2>
   </div>
   <!-- 'route'=>'empleados.emp', -->
   {!!Form::open(['route'=>'prestamos.store','method'=>'POST'])!!}
   <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Nombre del Empleado:')!!}
         <div class="input-group">
     <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
   {!!Form::text('nombE',null,['class'=>'form-control','placeholder'=>'Digite el nombre del empleado','id'=>'emp'])!!}
   </div>
      </div>
      <div class="hidden">
         {!!Form::text('emp_id',null,['class'=>'hidden','id' => 'id'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Fecha del Prestamo:')!!}
         {!!Form::date('fechaP',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del empleado'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Moneda:')!!}
         {!!Form::select('moneda', ['Colones' => 'Colones', 'Dolares' => 'Dolares'],null, ['class' => 'form-control'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Monto:')!!}
         {!!Form::number('montoP',null,['class'=>'form-control','placeholder'=>'Ingresa el monto de la deducción','id' => 'monto'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Porcentaje de Interes:')!!}
         {!!Form::number('interes',null,['class'=>'form-control','placeholder'=>'Digite el porcentaje','id' => 'intereses'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Monto Total del Prestamo:')!!}
         {!!Form::number('montoTotal',null,['class'=>'form-control','id' => 'montoTotal','readonly'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Plazo Semanal:')!!}
         {!!Form::number('plazoS',null,['class'=>'form-control','placeholder'=>'Digite el porcentaje','id' => 'plazoSemanal'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Monto a Pagar por Semana:')!!}
         {!!Form::number('total',null,['class'=>'form-control','id' => 'totales','readonly'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Fecha de Solicitud:')!!}
         {!!Form::date('fSolicitud',null,['class'=>'form-control'])!!}
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Notas:')!!}
         {!!Form::text('notas',null,['class'=>'form-control','placeholder'=>'Digite notas a considerar'])!!}
      </div>
      <br>
      <br>
      <div class="row">
         {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>


      {!!Form::close()!!}
      <hr class="divisor">
   </div>
   {!!Html::script('js/jquery.js')!!}
   {!!Html::script('js/jqueryui.js')!!}
   {!!Html::script('js/prestamos.js')!!}
   @stop