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
 {!!Form::open(array('route'=>'insert','id'=>'frmsave','method'=>'post'))!!}

 <div class="col-lg-12">
  <h2 class="page-header">Planillas</h2>
</div>

<div class="form-group col-sm-4">
  Inicio
  <input type="date" name="fInicio[]" class="form-control fInicio">
</div>
<div class="form-group col-sm-4">
  Final
  <input type="date" name="fFinal[]" class="form-control Final">
</div>
<br>

<table class="table table-striped table-responsive" id="tblGrid">
  <thead id="tblHead">
    <tr>
      <th>ID</th>
      <th>Cédula</th>
      <th>Nombre</th>
      <th>Cuenta</th>
      <th>Salario</th>
      <th>Horas</th>
      <th>Horas E</th>
      <th>Vacaciones</th>
      <th>C.C.S.S</th>
      <th>Prestamos</th>
      <th>Vales</th>
      <th>Otros</th>
      <th>Ahorros</th>
      <th>Neto</th>
      <th>Total</th>
    </tr>
  </thead>
  @foreach($consulta as $user)
  <tbody>
    <tr>
      <td><input type="text" name="id[]" value="{{$user -> id}}" class="form-control id" readonly></td>

      <td><input type="text" name="cedula[]" value="{{$user -> numId}}" class="form-control cedula" readonly></td>

      <td><input type="text" name="nombre[]" value="{{$user -> nomb}}" class="form-control nombre" readonly></span></td>

      <td><input type="text" name="banco[]" value="{{$user -> cBanc}}" class="form-control banco" readonly></td>

      <td><input type="text" name="salario[]" value="{{$user -> salarioS}}" class="form-control salario" readonly></td>

      <td><input type="number" value="40" style="max-width: 70px !important" name="horasNormal[]" class="form-control horasNormal"></td>

      <td><input type="number" value="0" style="max-width: 70px !important" name="horasExtra[]" class="form-control horasExtra"></td>

      <td><input type="text" name="vacaciones[]" value="{{$user -> totalVacas}}" class="form-control vacaciones" readonly></td>

      <td><input type="text" name="caja[]" value="{{$user->caja}}" class="form-control caja" readonly></td>

      <td><input type="text" name="prestamos[]" value="{{$user -> montoP}}" class="form-control prestamos" readonly></td>

      <td><input type="text" name="vales[]" value="{{$user -> totalVales}}" class="form-control vales" readonly></td>

      <td><input type="text" name="deducciones[]" value="{{$user -> montoO}}" class="form-control deducciones" readonly></td>

      <td><input type="text" name="ahorros[]" value="{{$user -> montoS}}" class="form-control ahorros" readonly></td>

      <td><input type="text" name="neto[]" value="{{$user->neto}}" class="form-control neto" readonly></td>

      <td><input type="text" name="totales[]" value="{{$user->totales}}" class="form-control totales" readonly></td>
    </tr>
  </tbody>
  @endforeach
  <tr>
    <th scope="row">TOTAL</th>
    <td><strong></strong></td>
    <td><strong></strong></td>
    <td><strong></strong></td>
    <td><strong>₡{{$salarios}}</strong></td>
    <td><strong></strong></td>
    <td><strong></strong></td>
    <td><strong>₡{{$vacaciones}}</strong></td>
    <td><strong>₡<?php echo $sumCaja;?></strong></td>
    <td><strong>₡{{$prestamos}}</strong></td>
    <td><strong>₡{{$vales}}</strong></td>
    <td><strong>₡{{$deducciones}}</strong></td>
    <td><strong>₡{{$ahorros}}</strong></td>
    <td><strong class="netos">₡<?php echo $sumNeto;?></strong></td>
    <td><strong class="total">₡<?php echo $sumTotal;?></strong></td>
  </tr>
</table>
<div class="col-lg-12">
  {!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
</div>
<p class="note">Si no aparece un usuario, es por que aún no le ha asignado un salario.</p>

{!!Form::hidden('_token',csrf_token())!!}

{!!Form::close()!!}
</div>

{!!Html::script('js/jquery.js')!!}
<script type="text/javascript">

 $('tbody').delegate('.horasNormal,.horasExtra','change',function(){
  var tr =$(this).parent().parent();

  var sal = tr.find('.salario').val();
  var hN = tr.find('.horasNormal').val();
  var hE = tr.find('.horasExtra').val();
  var vac = tr.find('.vacaciones').text();
  var caj = tr.find('.caja').text();
  var pre = tr.find('.prestamos').text();
  var val = tr.find('.vales').text();
  var ded = tr.find('.deducciones').text();
  var aho = tr.find('.ahorros').text();  

  var neto = hE + hN + sal;


  tr.find('.neto').val(neto);

  tr.find('.totales').val(neto);

  total();

});

 function total(){
  var total= 0;
  $('.neto').each(function(i,e){
    var netos = $(this).val()-0;
    total += netos;
  })
  $('.netos').html(total);

  $('.total').html(total);

};

</script>


@stop