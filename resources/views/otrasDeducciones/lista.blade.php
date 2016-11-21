@extends('layouts.principal')

@section('content')
@if(Session::has('message'))
<br>
<div class="alert alert-success" role="alert">
  <a href="#" class="alert-link"></a>
  {{Session::get('message')}}
</div>
@endif
<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Lista Otras Deducciones</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Nombre del Empleado</th>
                  <th>Moneda</th>
                  <th>Monto</th>
                  <th>Fecha Solicitud</th>
                  <th>Notas</th>
                  <th>Accion</th>
                  <th>Descargar</th>
                </tr>
            </thead>
            @foreach($od as $otraDeduccion)
              <tbody>
                      <tr>
                      <td>{{$otraDeduccion -> nomb}}</td>
                      <td>{{$otraDeduccion -> moneda}}</td>
                      <td>{{$otraDeduccion -> montoO}}</td>
                      <td>{{$otraDeduccion -> fSolicitud}}</td>
                      <td>{{$otraDeduccion -> notas}}</td>
                      <td><button type="button" class="btn btn-sucess">EDITAR</button></td>
                      <td><a href="{{ URL::to('downloadExcelDeducciones',$parameters = $otraDeduccion->id) }}"><button class="btn btn-success">Descargar</button></a></td>
                      </tr>
              </tbody>
            @endforeach
            <tr>
            <th scope="row">TOTAL</th>
            <td></td>
            <td><strong>{{$sum_total}}</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            </table>
</div>

  {!!$od->render()!!}

  
         @stop