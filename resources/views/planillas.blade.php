@extends('layouts.principal')

@section('content')
<div class="row">

<!--<?php var_dump($users); ?>-->

<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

            <div class="col-lg-12">
                <h2 class="page-header"><code>Planillas</code></h2>
            </div>
          <div class="form-group col-sm-4">
            Inicio
            {!!Form::date('fechaIni',null,['class'=>'form-control','id'=>'inicio'])!!}
          </div>
         <div class="form-group col-sm-4">
            Final
            {!!Form::date('fechaIni',null,['class'=>'form-control','id'=>'final'])!!}
          </div>
        <br>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Nombre</th>
                  <th>Cédula</th>
                  <th>Cuenta</th>
                  <th>Salario</th>
                  <th>Horas</th>
                  <th>Horas Extra</th>
                  <th>Vacaciones</th>
                  <th>C.C.S.S</th>
                  <th>Prestamos</th>
                  <th>Vales</th>
                  <th>Otros</th>
                  <th>Salario Neto</th>
                  <th>Ahorros</th>
                  <th>Total</th>
                </tr>
            </thead>
              @foreach($users as $user)
              <tbody>
                      <tr>
                        <td>{{$user -> nomb}}</td>
                        <td><span id="id" >{{$user -> numId}}</span></td>
                        <td style="width: 130px !important">{{$user -> cBanc}}</td>
                        <td>{{$user -> salarioM}}</td>
                        <td><input data-id='<?php echo $user -> id;?>' type="number" value="48" style="max-width: 50px !important" id="horasNormal"></td>
                        <td><input data-id='<?php echo $user -> id;?>' type="number" value="0" style="max-width: 50px !important" id="horasExtra"></td>
                        <td>{{$user -> diasD}}</td>
                        <td>X HORAS</td>
                        <td>{{$user -> montoP}}</td>
                        <td>{{$user -> total}}</td>
                        <td>{{$user -> montoO}}</td>
                        <td><span id="total<?php echo $user -> id;?>" >{{$user->total}}</span></td>
                        <td>{{$user -> montoS}}</td>
                        <td><span id="total<?php echo $user -> id;?>" >{{$user->total}}</span></td>
                      </tr>
              </tbody>
            @endforeach
            </table>
            <p class="note">Si no aparece un usuario, es por que aún no le ha asignado un salario.</p>

            {!!Html::script('js/jquery.js')!!}

            {!!Html::script('js/planillas.js')!!}
</div>


  
@stop