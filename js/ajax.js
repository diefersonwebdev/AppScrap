$(document).ready(function(){

	$('#executaAjax').click(function(){

		$.ajax({
			url: "pagina_ajax.php",
			success:function(data){

				
			}
		});
	});
});