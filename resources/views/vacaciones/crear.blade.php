@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">


            <div class="col-lg-12">
               <h2 class="page-header">Registrar Vacaciones</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['route'=>'vacaciones.store','method'=>'POST'])!!}
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
               {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del departamento'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Tipo de Vacaciones:')!!}
               {!!Form::select('tVacaciones', ['Disfrutadas' => 'Disfrutadas', 'Pagadas' => 'Pagadas'],null, ['class' => 'form-control'])!!}
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
               {!!Form::number('diasD',null,['class'=>'form-control','placeholder'=>'Digite el total de días disfrutados'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('C.C.S.S:')!!}
               {!!Form::number('caja',null,['class'=>'form-control','placeholder'=>'Porcentaje de la C.C.S.S'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Total:')!!}
               {!!Form::number('total',null,['class'=>'form-control','placeholder'=>'Total'])!!}
            </div>
            </div>
            <br>
            <br>
            <div class="row">
                  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            </div>
            <br>
            {!!Form::close()!!}
            <hr class="divisor">
         </div>
@stop
