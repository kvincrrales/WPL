var urlx = '/autocompletePadron';
var urlxs = '/autocomplete';

$('#dir').autocomplete({
	source : urlx,
	minlenght: 1,
	autoFocus: true,
	select:function(e , ui){
		$('#id').val(ui.item.id);
		$('#nomb').val(ui.item.name);
	}
});

$('#emp').autocomplete({
	source : urlxs,
	minlenght: 1,
	autoFocus: true,
	select:function(e , ui){
		$('#id').val(ui.item.id);
		$('#nomb').val(ui.item.name);
	}
});
///////////VACACIONES///////////
$('#empId').autocomplete({
	source : urlxs,
	minlenght: 1,
	autoFocus: true,
	select:function(e , ui){
		$('#idE').val(ui.item.id);
		$('#nomb').val(ui.item.name);
	}
});