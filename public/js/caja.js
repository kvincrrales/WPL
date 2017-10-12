////////////////////////////////////////////////////////////////////////////////////////
// token necesario para los request, se obtiene del impit hidden que esta en la vista //
////////////////////////////////////////////////////////////////////////////////////////
var token = $("#token").val();
////////////////////////////////////////////////////////////////////////////////////
// url definida en el web.php que asocia el metodo con la función que va a llamar //
////////////////////////////////////////////////////////////////////////////////////
var url = '/calculoCajaCCSS';

/////////////////////////
//listener de #salario //
/////////////////////////
$(document).on('change','#inicio,#final', function(event) {
	
	// json con los datos que quiero enviar
	var data = {
		'nInicio': $('#inicio').val(),
		'nFinal': $('#final').val()
		};

	//ajax
	$.ajax({

		type:'GET',
		headers: {'X-CSRF-TOKEN': token},
		url:url,
		data: data,
		dataType: 'json',

		success: function (data) {


		$('#totali').val(data.totali);
		$('#totalu').val(data.totalu);

		console.log(data);

		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});