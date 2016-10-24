@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Asignar Salario</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['route'=>'salarios.store','method'=>'POST'])!!}
            <div class="row">
            <div class="form-group col-sm-12">
               {!!Form::label('Nombre del Empleado [ID]:')!!}
               {!!Form::select('emp_id',$emp,null,['class'=>'form-control'])!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-2">
               {!!Form::label('Salario Mensual:')!!}
               {!!Form::text('salarioM',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Salario Quincenal:')!!}
               {!!Form::text('salarioQ',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Salario Semanal:')!!}
               {!!Form::text('salarioS',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Salario Diario:')!!}
               {!!Form::text('salarioD',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Salario x Hora:')!!}
               {!!Form::text('salarioH',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-2">
               {!!Form::label('Salario x Hora Extra:')!!}
               {!!Form::text('salarioHE',null,['class'=>'form-control'])!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
               {!!Form::label('C.C.S.S:')!!}
               {!!Form::text('caja',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-6">
               {!!Form::label('Incapacidad:')!!}
               {!!Form::text('incapacidad',null,['class'=>'form-control'])!!}
            </div>
            </div>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            <hr class="divisor">
         </div>
@stop
