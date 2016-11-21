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
                <h2 class="page-header">Lista de Prestamos Semanales</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Fecha Prestamo</th>
                  <th>Moneda</th>
                  <th>Monto Prestamo</th>
                  <th>Interes</th>
                  <th>Plazo Semanal</th>
                  <th>Total</th>
                  <th>Fecha Solicitud</th>
                  <th>Notas</th>
                  <th>Accion</th>
                  <th>Descargar</th>
                </tr>
            </thead>
              @foreach($pre as $prestamo)
              <tbody>
                      <tr>
                      <td>  {{$prestamo -> emp_id}}</td>
                      <td>  {{$prestamo -> nomb}}</td>
                      <td>  {{$prestamo -> fechaP}}</td>
                      <td>  {{$prestamo -> moneda}}</td>
                      <td>₡ {{$prestamo -> montoP}}</td>
                      <td>  {{$prestamo -> interes}}</td>
                      <td>  {{$prestamo -> plazoS}}</td>
                      <td>  {{$prestamo -> total}}</td>
                      <td>  {{$prestamo -> fSolicitud}}</td>
                      <td>  {{$prestamo -> notas}}</td>
                      <td><button type="button" class="btn btn-sucess">EDITAR</button></td>
                      <td><a href="{{ URL::to('downloadExcelPrestamos',$parameters = $prestamo->id) }}"><button class="btn btn-success">Descargar</button></a></td>
                      </tr>
              </tbody>
            @endforeach
            <tr>
            <th scope="row">TOTAL</th>
            <td></td>
            <td></td>
            <td></td>
            <td><strong>₡  {{$sum_prestamo}}</strong></td>
            <td></td>
            <td></td>
            <td><strong>₡  {{$sum_total}}</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            </table>
</div>

  {!!$pre->render()!!}
@stop