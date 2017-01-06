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
                <h2 class="page-header">Lista de Incapacidades</h2>
            </div>
            {!! Form::open(array('url'=>'incapacidades','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
        <div class="form-group col-lg-6 pull-right">
          <div class="input-group">
            <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </span>
          </div>
        </div>

        {{Form::close()}}
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Nombre del Empleado</th>
                  <th>Fecha</th>
                  <th>Tipo</th>
                  <th>Total</th>
                  <th>Notas</th>
                  <th>Accion</th>
                  <th>Descargar</th>
                </tr>
            </thead>
            @foreach($incapacidades as $incapacidad)
              <tbody>
                      <tr>
                      <td>{{$incapacidad -> nomb}}</td>
                      <td>{{$incapacidad -> fecha}}</td>
                      <td>{{$incapacidad -> tipo}}</td>
                      <td>{{$incapacidad -> total}}</td>
                      <td>{{$incapacidad -> nota}}</td>
                      <td><button type="button" class="btn btn-sucess">{!!link_to_route('incapacidades.edit', $title = 'Editar', $parameters = $incapacidad->id)!!}</button></td>
                      <td><a href="{{ URL::to('downloadExcelIncapacidades',$parameters = $incapacidad->id) }}"><button class="btn btn-success">Descargar</button></a></td>
                      </tr>
              </tbody>
            @endforeach
            </table>
</div>
{{$incapacidades->render()}}


  
         @stop