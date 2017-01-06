////////////////////////////////////////////////////////////////////////////////////////
// token necesario para los request, se obtiene del impit hidden que esta en la vista //
////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////
// url definida en el web.php que asocia el metodo con la función que va a llamar //
////////////////////////////////////////////////////////////////////////////////////
var url = '/calculoPlanillas';

/////////////////////////
//listener de #salario //
/////////////////////////
$(document).on('change', '#inicio,#final,#horas,#horasExtra', function(event) {
	
	// json con los datos que quiero enviar
	var data = {
		'nInicio': $('#inicio').val(),
		'nFinal': $('#final').val(),
		'nHoras': $('#horas').val(),
		'nHorasExtra': $('#horasExtra').val()
		};

	//ajax
	$.ajax({

		type:'GET',
		headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
		url:url,
		data: data,
		dataType: 'json',

		success: function (data) {
		$('#cedula').text(data.cedula);	
		$('#nombre').text(data.nombre);
		$('#banco').text(data.banco);	
		$('#salario').text(data.salMensual);
		$('#ahorros').text(data.montoAhorro);	
		$('#vacaciones').text(data.enVacaciones);
		$('#vales').text(data.vales);	
		$('#prestamos').text(data.prestamos);
		$('#deducciones').text(data.deducciones);
		$('#caja').text(data.caja);
		$('#neto').text(data.neto);
		$('#total').text(data.total);
		
		console.log(data);

		},
		
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});