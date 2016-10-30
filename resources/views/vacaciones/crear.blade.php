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
               {!!Form::select('tVacaciones', ['0' => 'Disfrutadas', '1' => 'Pagadas'],null, ['class' => 'form-control'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Número de Vacaciones:')!!}
               {!!Form::number('num_vac',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del departamento'])!!}
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
               {!!Form::label('Monto:')!!}
               {!!Form::text('monto',null,['class'=>'form-control','placeholder'=>'Digite el monto a pagar'])!!}
            </div>
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
