@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">


            <div class="col-lg-12">
               <h2 class="page-header">Registrar Vacaciones</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['route'=>'vacaciones.store','method'=>'POST'])!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('ID Empleado:')!!}
               {!!Form::select('emp_id',$emp,null,['class'=>'form-control','onchange'=>"document.getElementById('text_content').value=this.options[this.selectedIndex].text",'id'=>'idE'])!!}
            </div>
            </div>
            <div class="hidden">
            {!!Form::text('nomb',null,['class'=>'hidden','id' => 'text_content'])!!}
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Tipo de Vacaciones:')!!}
               {!!Form::select('tVacaciones', ['Disfrutadas' => 'Disfrutadas', 'Pagadas' => 'Pagadas'],null, ['class' => 'form-control','id'=>'tVac'])!!}
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
               {!!Form::number('diasD',null,['class'=>'form-control','placeholder'=>'Digite el total de días disfrutados','id'=>'cDias'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('C.C.S.S:')!!}
               {!!Form::number('caja',null,['class'=>'form-control','placeholder'=>'Porcentaje de la C.C.S.S','id'=>'caja','readonly'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Total:')!!}
               {!!Form::number('total',null,['class'=>'form-control','placeholder'=>'Total','id'=>'totales','readonly'])!!}
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
         {!!Html::script('js/jquery.js')!!}

         {!!Html::script('js/vacaciones.js')!!}
@stop
