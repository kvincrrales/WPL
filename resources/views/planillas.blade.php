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
<div class="table-responsive">
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
  <input type="date" name="fFinal[]" class="form-control fFinal">
</div>
<br>

  <table class="table table-striped">
    <thead id="tblHead">
    <tr>
      <th class="hide">ID</th>
      <th>Cédula</th>
      <th>Nombre</th>
      <th>Cuenta</th>
      <th>Salario</th>
      <th>Horas</th>
      <th>Horas Extra</th>
      <th>Horas</th>
      <th>Horas Extra</th>
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
      <td class="hide"><input type="text" name="id[]" value="{{$user -> id}}" class="inputPlanillas id" readonly></td>

      <td><input type="text" name="cedula[]" value="{{$user -> numId}}" class="inputPlanillas cedula" readonly></td>

      <td><input type="text" name="nombre[]" value="{{$user -> nomb}} {{$user -> ape1}}" class="inputPlanillas nombre" readonly></span></td>

      <td><input type="text" name="banco[]" value="{{$user -> cBanc}}" class="inputPlanillas banco" readonly></td>

      <td><input type="text" name="salario[]" value="{{$user -> salarioS}}" class="inputPlanillas salario" readonly></td>

      <td><input type="text" value="48" style="max-width: 40px !important" name="horasNormal[]" class="horasNormal"></td>

      <td><input type="text" value="0" style="max-width: 40px !important" name="horasExtra[]" class="horasExtra"></td>

      <td><input type="text" value="{{$user -> horasx}}" name="horasNormal2[]" class="inputPlanillas horasNormal2" readonly></td>

      <td><input type="text" value="" name="horasExtra2[]" class="inputPlanillas horasExtra2" readonly></td>

      <td><input type="text" name="vacaciones[]" value="{{$user -> totalVacas}}" class="inputPlanillas vacaciones" readonly></td>

      <td><input type="text" name="caja[]" value="{{$user->caja}}" class="inputPlanillas caja" readonly></td>

      <td><input type="text" name="prestamos[]" value="{{$user -> montoP}}" class="inputPlanillas prestamos" readonly></td>

      <td><input type="text" name="vales[]" value="{{$user -> totalVales}}" class="inputPlanillas vales" readonly></td>

      <td><input type="text" name="deducciones[]" value="{{$user -> montoO}}" class="inputPlanillas deducciones" readonly></td>

      <td><input type="text" name="ahorros[]" value="{{$user -> montoS}}" class="inputPlanillas ahorros" readonly></td>

      <td><input type="text" name="neto[]" value="{{$user->neto}}" class="inputPlanillas neto" readonly></td>

      <td><input type="text" name="totales[]" value="{{$user->totales}}" class="inputPlanillas totales" readonly></td>
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
    <td><strong class="hN2">₡<?php echo $sumH;?></strong></td>
    <td><strong class="hE2"></strong></td>
    <td><strong>₡{{$vacacionesT}}</strong></td>
    <td><strong>₡<?php echo $sumCaja;?></strong></td>
    <td><strong>₡{{$prestamos}}</strong></td>
    <td><strong>₡{{$vales}}</strong></td>
    <td><strong>₡{{$deducciones}}</strong></td>
    <td><strong>₡{{$ahorros}}</strong></td>
    <td>₡<strong class="netos"><?php echo $sumNeto;?></strong></td>
    <td>₡<strong class="total"><?php echo $sumTotal;?></strong></td>
  </tr>
  </table>
</div>
<div class=row>
  <div class="col-lg-12">
    {!!Form::submit('Guardar',array('class'=>'btn btn-primary'))!!}
  </div>
</div>
<br>
<p class="note">Si no aparece un usuario, es por que aún no le ha asignado un salario.</p>

{!!Form::hidden('_token',csrf_token())!!}

{!!Form::close()!!}
</div>

{!!Html::script('js/jquery.js')!!}
<script type="text/javascript">

 $('tbody').delegate('.horasNormal,.horasExtra','keyup',function(){
  var tr =$(this).parent().parent();

  var sal = tr.find('.salario').val();
  var hN = tr.find('.horasNormal').val();
  var hE = tr.find('.horasExtra').val();
  var vac = tr.find('.vacaciones').val();
  var caj = tr.find('.caja').val();
  var pre = tr.find('.prestamos').val();
  var val = tr.find('.vales').val();
  var ded = tr.find('.deducciones').val();
  var aho = tr.find('.ahorros').val(); 

  var hora = sal / 48;

  var horaE = hora*1.5; 

  console.log(vac);

  var netox = Math.round(hora * hN + horaE * hE + vac - caj - pre - val - ded);

  var totalx = Math.round(hora * hN + horaE * hE + vac - caj - pre - val - ded - aho);

  var horax = Math.round(hora * hN);

  var horaxExtra = Math.round(horaE * hE);

  tr.find('.horasNormal2').val(horax);

  tr.find('.horasExtra2').val(horaxExtra);

  tr.find('.neto').val(netox);

  tr.find('.totales').val(totalx);

  horas();

  horasExtra();

  neto();

  total();

});

 function horas(){
  var total= 0;
  $('.horasNormal2').each(function(i,e){
    var horas = $(this).val()-0;
    total += horas;
  })
  $('.hN2').html("₡"+total);

};

function horasExtra(){
  var total= 0;
  $('.horasExtra2').each(function(i,e){
    var horasE = $(this).val()-0;
    total += horasE;
  })
  $('.hE2').html("₡"+total);

};


 function neto(){
  var total= 0;
  $('.neto').each(function(i,e){
    var netos = $(this).val()-0;
    total += netos;
  })
  $('.netos').html(total);

};


function total(){
  var total= 0;
  $('.totales').each(function(i,e){
    var netos = $(this).val()-0;
    total += netos;
  })

  $('.total').html(total);

};

</script>


@stop