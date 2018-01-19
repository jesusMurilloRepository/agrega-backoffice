$('#UsuarioUsuarioTipo').on('change', function() {
	var selecionado = $(this).val();

	$('div[class^=campos-usuario]').hide()
	$('.campos-usuario-'+selecionado).show()

})




$('.teste').on('click',function()){

	alert('2')
}