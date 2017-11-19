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
    <h2 class="page-header">Lista de Ahorros Semanales</h2>
  </div>
  <table class="table table-striped" id="tblGrid">
    <thead id="tblHead">
      <tr>
        <th>ID Empleado</th>
        <th>Monto Ahorro</th>
        <th>Monto Actual</th>
        <th>Notas</th>
        <th>Accion</th>
        <th>PDF</th>
      </tr>
    </thead>
    @foreach($aho as $ahorro)
    <tbody>
      <tr>
        <td>  {{$ahorro -> nomb}}</td>
        <td>₡ {{$ahorro -> montoS}}</td>
        <td>₡ {{$ahorro -> montoA}}</td>
        <td>  {{$ahorro -> nota}}</td>
        <td>{!!Form::open(['route'=>['ahorros.destroy',$ahorro->id],'method'=>'DELETE'])!!}<button type="button" class="btn btn-sucess">{!!link_to_route('ahorros.edit', $title = 'Editar', $parameters = $ahorro->id)!!}</button> {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}</td>
          <td><a href="{{ URL::to('downloadPdfAhorros',$parameters = $ahorro->id) }}"><button class="btn btn-primary">PDF</button></a></td>
        </tr>
      </tbody>
      @endforeach
      <tr>
        <th scope="row">TOTAL</th>
        <td><strong>₡ {{$montoSemanal}}</strong></td>
        <td><strong>₡ {{$montoActual}}</strong></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
  <div class="text-center">
    {!!$aho->render()!!}
  </div>
  @stop