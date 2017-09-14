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
                <h2 class="page-header">Lista de Vales</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Nombre del Empleado</th>
                  <th>Moneda</th>
                  <th>Monto</th>
                  <th>Interes</th>
                  <th>Total</th>
                  <th>Fecha Solicitud</th>
                  <th>Notas</th>
                  <th>Accion</th>
                  <th>Descargar PDF</th>
                  <th>Descargar Excel</th>
                </tr>
            </thead>
            @foreach($val as $vale) 
              <tbody>
                      <tr>
                      <td>{{$vale -> nombE}}</td>
                      <td>{{$vale -> moneda}}</td>
                      <td>{{$vale -> montoV}}</td>
                      <td>% {{$vale -> interes}}</td>
                      <td>{{$vale -> total}}</td>
                      <td>{{$vale -> fSolicitud}}</td>
                      <td>{{$vale -> notas}}</td>
                      <td><button type="button" class="btn btn-sucess">{!!link_to_route('vales.edit', $title = 'Editar', $parameters = $vale->id)!!}</button></td>
                      <td><a href="{{ URL::to('downloadPdfVales',$parameters = $vale->id) }}"><button class="btn btn-danger">PDF</button></a></td>
                      <td><a href="{{ URL::to('downloadExcelVales',$parameters = $vale->id) }}"><button class="btn btn-success">XLS</button></a></td>
                      </tr>
              </tbody>
            @endforeach
             <tr>
            <th scope="row">TOTAL</th>
            <td></td>
            <td><strong>{{$monto_val}}</strong></td>
            <td></td>
            <td><strong>{{$sum_val}}</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            </table>
</div>

  {!!$val->render()!!}

  
         @stop