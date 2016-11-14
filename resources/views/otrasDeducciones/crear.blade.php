@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Registrar Deducciones</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['method'=>'POST'])!!}
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('ID Empleado:')!!}
                {!!Form::select('emp_id',$emp,null,['class'=>'form-control'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Nombre del Empleado:')!!}
               {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del empleado'])!!}
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
               {!!Form::text('montoO',null,['class'=>'form-control','placeholder'=>'Ingresa el monto de la deducción'])!!}
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
@stop
