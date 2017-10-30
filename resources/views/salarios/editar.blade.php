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
               <h2 class="page-header">Editar Salario</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::model($sal,['route'=>['salarios.update',$sal->id],'method'=>'PUT'])!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="row">
            <div class="form-group col-sm-6">
            {!!Form::label('Nombre del Empleado:')!!}
            {!!Form::select('emp_id',$datos,null,['class'=>'form-control','onchange'=>"document.getElementById('text_content').value=this.options[this.selectedIndex].text"])!!}
            </div>
            <div class="hidden">
            {!!Form::text('nomb',null,['class'=>'hidden','id' => 'text_content'])!!}
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
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            <br>
            <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::open(['route'=>['salarios.destroy',$sal->id],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
            </div>
            </div>
            <hr class="divisor">
         </div>
         {!!Html::script('js/jquery.js')!!}
         {!!Html::script('js/salarios.js')!!}
@stop
