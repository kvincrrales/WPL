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

			//console.log(data);

			$.each(data, function(key,val){
				//console.log(key);
             	//console.log(val); //depending on your data, you might call val.url or whatever you may have

             	var  tr=
             	'<tr>'+
             	'<td><input type="text" name="id[]" value="'+val.emp_id+'" class="inputPlanillas id" readonly></td>'+

             	'<td><input type="text" name="cedula[]" value="'+val.emp_ced+'" class="inputPlanillas cedula" readonly></td>'+

             	'<td><input type="text" name="nombre[]" value="'+val.emp_nomb+'" class="inputPlanillas nombre" readonly></span></td>'+

             	'<td><input type="text" name="salario[]" value="'+val.emp_sal+'" class="inputPlanillas salario" readonly></td>'+

             	'<td><input type="text" name="total[]" value="'+val.total+'" class="inputPlanillas total" readonly></td>'+

             	'<td><input type="text" name="comentario[]" value="" class="inputPlanillas comentario" readonly></td>'+
             	'</tr>';

             	$('tbody').append(tr);


             });
				/*
			var th = 
			'<tr>'+
			'<td>Totales: </td>'+

			'<td></td>'+

			'<td></td>'+

			'<td>'+"7,025,694"+'</td>'+

			'<td>'+"8,547,694"+'</td>'+

			'<td></td>'+
			'</tr>';

			$('tfoot').append(th);

	*/
		},
		error: function (err) {

			console.log('error al ejecutar ajax',err);

		}

	});

});