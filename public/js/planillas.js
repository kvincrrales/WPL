////////////////////////////////////////////////////////////////////////////////////////
// token necesario para los request, se obtiene del impit hidden que esta en la vista //
////////////////////////////////////////////////////////////////////////////////////////
var token = $("#token").val();
////////////////////////////////////////////////////////////////////////////////////
// url definida en el web.php que asocia el metodo con la función que va a llamar //
////////////////////////////////////////////////////////////////////////////////////
var url = '/calculoPlanilla';

/////////////////////////
//listener de #salario //
/////////////////////////
$(document).on('change', '#horasNormal', function(event) {
	
	var id = $(this).attr('data-id');
	// json con los datos que quiero enviar
	var data = {
		'nHorasN': $('#horasNormal').val() ,
		'nHorasE': $('#horasExtra').val() ,
		'id': id
	};
	//ajax
	$.ajax({

		type:'GET',
		headers: {'X-CSRF-TOKEN': token},
		url:url,
		data: data,
		dataType: 'json',

		success: function (data) {
			$('#neto'+id).text(data.neto);
			$('#totales'+id).text(data.totales);


			console.log(data);

		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});


$(document).on('change', '#horasExtra', function(event) {

	var id = $(this).attr('data-id');

	// json con los datos que quiero enviar
	var data = {
		'nHorasE': $('#horasExtra').val() ,
		'nHorasN': $('#horasNormal').val() ,
		'id': id
	};
	
	//ajax
	$.ajax({

		type:'GET',
		headers: {'X-CSRF-TOKEN': token},
		url:url,
		data: data,
		dataType: 'json',

		success: function (data) {

			$('#neto'+id).text(data.neto);
			$('#totales'+id).text(data.totales);

			console.log(data);

		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});