@extends('layouts.principal')

@section('content')
<div class="row">
 <div class="col-lg-12">
  <h2 class="page-header">Reportes Caja Costarricense del Seguro Social</h2>
</div>

<div class="form-group col-sm-4">
  Inicio
  <input type="date" name="fInicio[]" class="form-control fInicio" id="inicio">
</div>
<div class="form-group col-sm-4">
  Final
  <input type="date" name="fFinal[]" class="form-control fFinal" id="final">
</div>
<br>
<table class="table table-striped table-responsive" id="tblGrid">
  <thead id="tblHead">
    <tr>
      <th>ID</th>
      <th>Cédula</th>
      <th>Nombre</th>
      <th>Salario Actual</th>
      <th>Total Ingresos</th>
      <th>Comentarios</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/caja.js')!!}
@stop