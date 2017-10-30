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
    <h2 class="page-header">Lista de Vacaciones</h2>
  </div>
  <table class="table table-striped" id="tblGrid">
    <thead id="tblHead">
      <tr>
        <th>Nombre</th>
        <th>Tipo de Vacaciones</th>
        <th>Fecha de Solicitud</th>
        <th>Fecha Inicio</th>
        <th>Fecha Final</th>
        <th>Días Disfrutados</th>
        <th>C.C.S.S</th>
        <th>Total</th>
        <th>Accion</th>
        <th>Descargar PDF</th>
        <th>Descargar Excel</th>
      </tr>
    </thead>
    @foreach($vac as $vacacion)
    <tbody>
      <tr>
        <td>{{$vacacion -> nomb}}</td>
        <td>{{$vacacion -> tVacaciones}}</td>
        <td>{{$vacacion -> fechaS}}</td>
        <td>{{$vacacion -> fechaIni}}</td>
        <td>{{$vacacion -> fechaFin}}</td>
        <td>{{$vacacion -> diasD}}</td>
        <td>{{$vacacion -> caja}}</td>
        <td>{{$vacacion -> total}}</td>
        <td><button type="button" class="btn btn-sucess">{!!link_to_route('vacaciones.edit', $title = 'Editar', $parameters = $vacacion->id)!!}</button></td>
        <td><a href="{{ URL::to('downloadPdfVacaciones',$parameters = $vacacion->id) }}"><button class="btn btn-danger">PDF</button></a></td>
        <td><a href="{{ URL::to('downloadExcel',$parameters = $vacacion->id) }}"><button class="btn btn-success">Descargar</button></a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
<div class="text-center">
  {!!$vac->render()!!}
</div>
@stop