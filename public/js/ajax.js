$("#registro").click(function(){
	var dato = $("#frmPuesto").val();
	var route = "/puestos/create";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:$('frmPuesto').serialize(),

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.puesto);
			$("#msj-error").fadeIn();
		}
	});
});

$("#departamento").change(event => {
	$.get(`puestos/${event.target.value}`, function(res, sta){
		$("#puesto").empty();
		res.forEach(element => {
			$("#puesto").append(`<option value=${element.id}> ${element.name} </option>`);
		});
	});
});