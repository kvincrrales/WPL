@extends('layouts.principal')

@section('content')
<!-- Team Members Row -->
<div class="row">
   <div class="col-lg-12">
      <h2 class="page-header">Registrar Vacaciones</h2>
   </div>
   <!-- 'route'=>'empleados.emp', -->
   {!!Form::model($vac,['route'=>['vacaciones.update',$vac->id],'method'=>'PUT'])!!}
   <div class="row">
     <div class="col-md-6 col-md-offset-3">
      {!!Form::label('Nombre del Empleado:')!!}
       <div class="input-group">
     <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
   {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Digite el nombre del empleado','id'=>'empId'])!!}
   </div>
   </div>
   <div class="hidden">
      {!!Form::text('emp_id',null,['class'=>'hidden','id' => 'idE'])!!}
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      {!!Form::label('Tipo de Vacaciones:')!!}
      {!!Form::select('tVacaciones', ['Disfrutadas' => 'Disfrutadas', 'Pagadas' => 'Pagadas'],null, ['class' => 'form-control','id'=>'tVac'])!!}
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      {!!Form::label('Fecha de Solicitud:')!!}
      {!!Form::date('fechaS',null,['class'=>'form-control'])!!}
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      {!!Form::label('Fecha Inicio de Vacaciones:')!!}
      {!!Form::date('fechaIni',null,['class'=>'form-control'])!!}
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      {!!Form::label('Fecha Fin de Vacaciones:')!!}
      {!!Form::date('fechaFin',null,['class'=>'form-control'])!!}
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      {!!Form::label('Días Disfrutados:')!!}
      {!!Form::number('diasD',null,['class'=>'form-control','placeholder'=>'Digite el total de días disfrutados','id'=>'cDias'])!!}
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      {!!Form::label('C.C.S.S:')!!}
      {!!Form::number('caja',null,['class'=>'form-control','placeholder'=>'Porcentaje de la C.C.S.S','id'=>'caja','readonly'])!!}
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      {!!Form::label('Total:')!!}
      {!!Form::number('total',null,['class'=>'form-control','placeholder'=>'Total','id'=>'totales','readonly'])!!}
   </div>
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
      {!!Form::open(['route'=>['vacaciones.destroy',$vac->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!}
   </div>
</div>


{!!Form::close()!!}
<hr class="divisor">
</div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/jqueryui.js')!!}
{!!Html::script('js/autocomplete.js')!!}
{!!Html::script('js/vacaciones.js')!!}
@stop
