$(document).ready(function () {

 $('tbody').delegate('.horasNormal,.horasExtra,.vacaciones','keyup',function(){
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

  var netox = Math.round(((hora * hN) + (horaE * hE)) + parseInt(vac) - caj - pre - val - ded);

  var totalx =  Math.round(((hora * hN) + (horaE * hE)) + parseInt(vac)  - caj - pre - val - ded - aho);
 // totalx = totalx.toFixed(2);

  var horax = Math.round(hora * hN);

  var horaxExtra = Math.round(horaE * hE);

  var caja =  Math.round((horax + horaxExtra) * 0.0984);


  tr.find('.caja').val(caja);

  tr.find('.horasNormal2').val(horax);

  tr.find('.horasExtra2').val(horaxExtra);

  tr.find('.neto').val(netox);

  tr.find('.totales').val(totalx);

  horas();

  horasExtra();

  cajasx();

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

function cajasx(){
  var total= 0;
  $('.caja').each(function(i,e){
    var netos = $(this).val()-0;
    total += netos;
  })

  $('.cajaTotal').html(total);

};

});