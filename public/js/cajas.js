////////////////////////////////////////////////////////////////////////////////////////
// token necesario para los request, se obtiene del impit hidden que esta en la vista //
////////////////////////////////////////////////////////////////////////////////////////
var token = $("#token").val();
////////////////////////////////////////////////////////////////////////////////////
// url definida en el web.php que asocia el metodo con la función que va a llamar //
////////////////////////////////////////////////////////////////////////////////////
var url = '/calculoCaja';

/////////////////////////
//listener de #salario //
/////////////////////////
$(document).on('change', '#nomb2,#nomb4,#nomb6,#nomb8,#nomb10,#nomb12,#nomb14,#nomb16,#nomb18,#nomb20,#nomb22,#nomb24,#nomb28,#nomb33,#nomb36,#nomb39,#nomb42,#nomb45,#nomb48,#nomb51,#nomb26,#nomb29,#nomb31,#nomb19,#nomb23', function(event) {
	
	// json con los datos que quiero enviar
	var data = {
		'nNomb2': $('#nomb2').val(),
		'nNomb4': $('#nomb4').val(),
		'nNomb6': $('#nomb6').val(),
		'nNomb8': $('#nomb8').val(),
		'nNomb10': $('#nomb10').val(),
		'nNomb12': $('#nomb12').val(),
		'nNomb14': $('#nomb14').val(),
		'nNomb16': $('#nomb16').val(),
		'nNomb18': $('#nomb18').val(),
		'nNomb19': $('#nomb19').val(),
		'nNomb20': $('#nomb20').val(),
		'nNomb23': $('#nomb23').val(),
		'nNomb22': $('#nomb22').val(),
		'nNomb24': $('#nomb24').val(),
		'nNomb28': $('#nomb28').val(),
		'nNomb33': $('#nomb33').val(),
		'nNomb36': $('#nomb36').val(),
		'nNomb39': $('#nomb39').val(),
		'nNomb42': $('#nomb42').val(),
		'nNomb45': $('#nomb45').val(),
		'nNomb48': $('#nomb48').val(),
		'nNomb51': $('#nomb51').val(),
		'nNomb26': $('#nomb26').val(),
		'nNomb29': $('#nomb29').val(),
		'nNomb31': $('#nomb31').val()
		};

	//ajax
	$.ajax({

		type:'GET',
		headers: {'X-CSRF-TOKEN': token},
		url:url,
		data: data,
		dataType: 'json',

		success: function (data) {


		$('#nomb26').val(data.total);
		$('#nomb31').val(data.diferencia);
		console.log(data);

		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});