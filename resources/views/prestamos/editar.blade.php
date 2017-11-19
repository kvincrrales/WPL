@extends('layouts.principal')

@section('content')
<!-- Team Members Row -->
<div class="row">
   <div class="col-lg-12">
      <h2 class="page-header">Editar Prestamos</h2>
   </div>
   <!-- 'route'=>'empleados.emp', -->
   {!!Form::model($pres,['route'=>['prestamos.update',$pres->id],'method'=>'PUT'])!!}
   <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!!Form::label('Nombre del Empleado:')!!}
         {!!Form::text('nombE',null,['class'=>'form-control','placeholder'=>'Digite el nombre del empleado','id'=>'emp'])!!}
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
         {!!Form::label('Total:')!!}
         {!!Form::number('total',null,['class'=>'form-control','placeholder'=>'Digite el total','id' => 'totales','readonly'])!!}
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
         <div class="form-group col-sm-12">
           {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
           {!!Form::close()!!}
        </div>
     </div>
     <div class="row">
      <div class="form-group col-sm-12">
         {!!Form::open(['route'=>['prestamos.destroy',$pres->id],'method'=>'DELETE'])!!}
         {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
         {!!Form::close()!!}
      </div>
   </div>
   <hr class="divisor">
</div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/jqueryui.js')!!}
{!!Html::script('js/prestamos.js')!!}
@stop