@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Registrar Vacaciones</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::model($vac,['route'=>['vacaciones.update',$vac->id],'method'=>'PUT'])!!}
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
            <div class="form-group col-sm-12">
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::open(['route'=>['vacaciones.destroy',$vac->id],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
            </div>
            </div>
   

   {!!Form::close()!!}
            <hr class="divisor">
         </div>
@stop
