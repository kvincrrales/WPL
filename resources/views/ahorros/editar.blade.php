@extends('layouts.principal')

@section('content')
<!-- Team Members Row -->
<div class="row">
   <div class="col-lg-12">
      <h2 class="page-header">Editar Ahorro</h2>
   </div>
   <!-- 'route'=>'empleados.emp', -->
   {!!Form::model($aho,['route'=>['ahorros.update',$aho->id],'method'=>'PUT'])!!}
   <div class="row">
      <div class="form-group col-sm-6">
         {!!Form::label('Nombre del Empleado:')!!}
         {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Digite el nombre del empleado','id'=>'emp'])!!}
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
      {!!Form::label('Monto Actual:')!!}
      {!!Form::text('montoA',null,['class'=>'form-control'])!!}
   </div>
   <div class="form-group col-sm-6">
      {!!Form::label('Notas:')!!}
      {!!Form::text('nota',null,['class'=>'form-control','placeholder'=>'Ingrese las notas a considerar'])!!}
   </div>
</div>
<div class="row">
   <div class="form-group col-sm-12">
      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
   </div>
</div>
<!--<div class="row">
   <div class="form-group col-sm-12">
      {!!Form::open(['route'=>['ahorros.destroy',$aho->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!}
   </div>
</div>-->
<hr class="divisor">
</div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/jqueryui.js')!!}
{!!Html::script('js/autocomplete.js')!!}
@stop
