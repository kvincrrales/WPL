////////////////////////////////////////////////////////////////////////////////////////
// token necesario para los request, se obtiene del impit hidden que esta en la vista //
////////////////////////////////////////////////////////////////////////////////////////
var token = $("#token").val();
////////////////////////////////////////////////////////////////////////////////////
// url definida en el web.php que asocia el metodo con la función que va a llamar //
////////////////////////////////////////////////////////////////////////////////////
var url = '/calculoPrestamo';

/////////////////////////
//listener de #salario //
/////////////////////////
$(document).on('change', '#monto,#intereses,#plazoSemanal,#totales', function(event) {
	
	// json con los datos que quiero enviar
	var data = {
		'nMonto': $('#monto').val(),
		'nPorcentaje': $('#intereses').val(),
		'nPlazo': $('#plazoSemanal').val(),
		'nTotales': $('#totales').val()
		};

	//ajax
	$.ajax({

		type:'GET',
		headers: {'X-CSRF-TOKEN': token},
		url:url,
		data: data,
		dataType: 'json',

		success: function (data) {


		$('#totales').val(data.total);

			console.log(data);

		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});