@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Registrar Vales</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::model($val,['route'=>['vales.update',$val->id],'method'=>'PUT'])!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
            {!!Form::label('Nombre del Empleado:')!!}
            {!!Form::select('emp_id',$emp,null,['class'=>'form-control','onchange'=>"document.getElementById('text_content').value=this.options[this.selectedIndex].text"])!!}
            </div>
            <div class="hidden">
            {!!Form::text('nombE',null,['class'=>'hidden','id' => 'text_content'])!!}
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
               {!!Form::number('montoV',null,['class'=>'form-control','placeholder'=>'Ingresa el monto de la deducción','id' => 'monto'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Interes:')!!}
               {!!Form::number('interes',null,['class'=>'form-control','placeholder'=>'Digite el porcentaje de interes','id' => 'intereses'])!!}
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
               {!!Form::label('Total:')!!}
               {!!Form::number('total',null,['class'=>'form-control','placeholder'=>'Digite el total','readonly','id'=>'totales'])!!}
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
            <div class="form-group col-sm-12">
             {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                  {!!Form::close()!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::open(['route'=>['vales.destroy',$val->id],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
            </div>
            </div>
            <hr class="divisor">
         </div>
         {!!Html::script('js/jquery.js')!!}

         {!!Html::script('js/vales.js')!!}
@stop