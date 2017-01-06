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
            <div class="form-group col-sm-6">
            {!!Form::label('Nombre del Empleado:')!!}
            {!!Form::select('emp_id',$emp,null,['class'=>'form-control','onchange'=>"document.getElementById('text_content').value=this.options[this.selectedIndex].text"])!!}
            </div>
            <div class="hidden">
            {!!Form::text('nomb',null,['class'=>'hidden','id' => 'text_content'])!!}
            </div>
            <div class="form-group col-sm-6">
            {!!Form::label('Monto del Ahorro por Semana:')!!}
            {!!Form::text('montoS',null,['class'=>'form-control'])!!}
            </div>
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
@stop
