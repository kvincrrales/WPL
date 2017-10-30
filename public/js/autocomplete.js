var urlx = '/autocompletePadron';

$('#dir').autocomplete({
	source : urlx,
	minlenght: 1,
	autoFocus: true,
	select:function(e , ui){
		$('#id').val(ui.item.id);
		$('#nomb').val(ui.item.name);
	}
});