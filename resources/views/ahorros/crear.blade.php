@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Nuevo Ahorro</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['method'=>'POST'])!!}
            <div class="row">
   <div class="form-group col-sm-6">
      {!!Form::label('Nombre del Empleado:')!!}
      {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del departamento'])!!}
   </div>
   <div class="form-group col-sm-6">
      {!!Form::label('Monto del Ahorro por Semana:')!!}
      {!!Form::text('monto',null,['class'=>'form-control'])!!}
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
@stop
