@extends('layouts.principal')

@section('content')
<div class="row">

<!--<?php var_dump($users); ?>-->

     <meta name="csrf-token" content="{{ csrf_token() }}">

            <div class="col-lg-12">
                <h2 class="page-header">Planillas</h2>
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
                  <th>Cédula</th>
                  <th>Nombre</th>
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
                <td><span id="cedula">{{$user -> numId}}</span></td>
                <td><span id="nombre">{{$user -> nomb}}</span></td>
                <td><span id="banco">{{$user -> cBanc}}</span></td>
                <td><span id="salario">{{$user -> salarioM}}</span></td>
                <td><input type="number" value="48" style="max-width: 50px" id="horas"></td>
                <td><input type="number" value="0" style="max-width: 50px" id="horasExtra"></td>
                <td><span id="vacaciones">{{$user -> diasD}}</span></td>
                <td><span id="caja">0</span></td>
                <td><span id="prestamos">{{$user -> montoP}}</span></td>
                <td><span id="vales">{{$user -> total}}</span></td>
                <td><span id="deducciones">{{$user -> montoO}}</span></td>
                <td><span id="neto">0</span></td>
                <td><span id="ahorros">{{$user -> montoS}}</span></td>
                <td><span id="total">0</span></td>
              </tr>
            </tbody>
            @endforeach
            <tr>
            <th scope="row">TOTAL</th>
            <td><strong></strong></td>
            <td><strong></strong></td>
            <td><strong>₡{{$salarios}}</strong></td>
            <td><strong></strong></td>
            <td><strong></strong></td>
            <td><strong></strong></td>
            <td><strong></strong></td>
            <td><strong>₡{{$prestamos}}</strong></td>
            <td><strong>₡{{$vales}}</strong></td>
            <td><strong>₡{{$deducciones}}</strong></td>
            <td><strong></strong></td>
            <td><strong>₡{{$ahorros}}</strong></td>
            <td><strong></strong></td>
          </tr>
            </table>
            <p class="note">Si no aparece un usuario, es por que aún no le ha asignado un salario.</p>

            {!!Html::script('js/jquery.js')!!}

            {!!Html::script('js/planillas.js')!!}

            {!!Html::script('js/prueba.js')!!}

</div>


  
@stop