////////////////////////////////////////////////////////////////////////////////////////
// token necesario para los request, se obtiene del impit hidden que esta en la vista //
////////////////////////////////////////////////////////////////////////////////////////
var token = $("#token").val();
////////////////////////////////////////////////////////////////////////////////////
// url definida en el web.php que asocia el metodo con la función que va a llamar //
////////////////////////////////////////////////////////////////////////////////////
var url = '/calculoVacacion';

/////////////////////////
//listener de #salario //
/////////////////////////
$(document).on('change', '#cDias,#caja,#idE,#tVac', function(event) {
	
	// json con los datos que quiero enviar
	var data = {
		'nDias': $('#cDias').val(),
		'nCaja': $('#caja').val(),
		'idE': $('#idE').val(),
		'tV': $('#tVac').val()
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
		$('#caja').val(data.caja);

		//console.log(data);

		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});