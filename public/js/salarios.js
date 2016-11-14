////////////////////////////////////////////////////////////////////////////////////////
// token necesario para los request, se obtiene del impit hidden que esta en la vista //
////////////////////////////////////////////////////////////////////////////////////////
var token = $("#token").val();
////////////////////////////////////////////////////////////////////////////////////
// url definida en el web.php que asocia el metodo con la función que va a llamar //
////////////////////////////////////////////////////////////////////////////////////
var url = '/calculo';

/////////////////////////
//listener de #salario //
/////////////////////////
$(document).on('keyup', '#salario', function(event) {

	// json con los datos que quiero enviar
	var data = {
		'salario': $('#salario').val() || 0
	};
	
	//ajax
	$.ajax({

		type:'GET',
		headers: {'X-CSRF-TOKEN': token},
		url:url,
		data: data,
		dataType: 'json',

		success: function (data) {

			$('#salarioQui').val(data.salarioQuincenal);
			$('#salarioSem').val(data.salarioSemanal);
			$('#salarioDia').val(data.salarioDiario);
			$('#salarioHor').val(data.salarioHora);
			$('#salarioExt').val(data.salarioExtra);
			$('#incapacid').val(data.caja);
			$('#ccss').val(data.incapacidad);


		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});


	$('#salida').val($(this).val());


});