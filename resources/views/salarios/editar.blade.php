@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Asignar Salario</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::model($sal,['route'=>['salarios.update',$sal->id],'method'=>'PUT'])!!}
            <div class="row">
            <div class="form-group col-sm-12">
               {!!Form::label('Nombre del Empleado [ID]:')!!}
               {!!Form::text('emp_id',null,['class'=>'form-control'])!!}
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
            <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::open(['route'=>['salarios.destroy',$sal->id],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
            </div>
            </div>
            <hr class="divisor">
         </div>
@stop
