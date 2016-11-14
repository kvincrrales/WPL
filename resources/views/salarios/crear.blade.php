@extends('layouts.principal')

@section('content')

<?php 

$datos = array();

foreach ($emp as $key => $value) {

   $datos[$value] = $key;
   
};?>
 <!-- Team Members Row -->

         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Asignar Salario</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['route'=>'salarios.store','method'=>'POST'])!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="row">
            <div class="form-group col-sm-12">
               {!!Form::label('Nombre del Empleado [ID]:')!!}
               {!!Form::select('emp_id',$datos,null,['class'=>'form-control'])!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-2">
               {!!Form::label('Salario Mensual:')!!}
               {!!Form::text('salarioM',null,['class'=>'form-control','placeholder'=>'Digite salario','id'=>'salario'])!!}
            </div>


            <div class="form-group col-sm-2">
               {!!Form::label('Salario Quincenal:')!!}
               {!!Form::text('salarioQ',null,['class'=>'form-control','readonly','id'=>'salarioQui'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Salario Semanal:')!!}
               {!!Form::text('salarioS',null,['class'=>'form-control','readonly','id'=>'salarioSem'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Salario Diario:')!!}
               {!!Form::text('salarioD',null,['class'=>'form-control','readonly','id'=>'salarioDia'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Costo x Hora:')!!}
               {!!Form::text('salarioH',null,['class'=>'form-control','readonly','id'=>'salarioHor'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Costo x Hora Extra:')!!}
               {!!Form::text('salarioHE',null,['class'=>'form-control','readonly','id'=>'salarioExt'])!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
               {!!Form::label('C.C.S.S:')!!}
               {!!Form::text('caja',null,['class'=>'form-control','readonly','id'=>'ccss'])!!}
            </div>
            <div class="form-group col-sm-6">
               {!!Form::label('Incapacidad:')!!}
               {!!Form::text('incapacidad',null,['class'=>'form-control','readonly','id'=>'incapacid'])!!}
            </div>
            </div>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            <hr class="divisor">
         </div>
         <!--<input type="text" id="salida">-->
         {!!Html::script('js/jquery.js')!!}
         {!!Html::script('js/salarios.js')!!}
@stop
