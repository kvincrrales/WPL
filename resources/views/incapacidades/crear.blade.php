@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Ingresar Incapacidad</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['route'=>'incapacidades.store','method'=>'POST'])!!}
            <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::label('Nombre del Empleado:')!!}
            {!!Form::select('emp_id',$emp,null,['class'=>'form-control','onchange'=>"document.getElementById('text_content').value=this.options[this.selectedIndex].text",'id'=>'idE'])!!}
            </div>
            <div class="hidden">
            {!!Form::text('nomb',null,['class'=>'hidden','id' => 'text_content'])!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
               {!!Form::label('Fecha:')!!}
               {!!Form::date('fecha',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-6">
                     {!!Form::label('Tipo de Incapacidad: ')!!}
                      {!!Form::select('tipo', ['C.C.S.S' => 'C.C.S.S', 'I.N.S' => 'I.N.S'],null, ['class' => 'form-control','id'=>'tInc'])!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
               {!!Form::label('Cantidad de Días:')!!}
               {!!Form::number('cDias',null,['class'=>'form-control','id'=>'cDiasD','max'=>'3'])!!}
            </div>
            <div class="form-group col-sm-6">
               {!!Form::label('Total:')!!}
               {!!Form::number('total',null,['class'=>'form-control','id'=>'totales','readonly'])!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
               {!!Form::label('Notas:')!!}
               {!!Form::text('nota',null,['class'=>'form-control'])!!}
            </div>
            </div>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            <hr class="divisor">
         </div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/incapacidades.js')!!}
@stop
