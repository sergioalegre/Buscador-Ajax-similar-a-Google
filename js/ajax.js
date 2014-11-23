$(function(){
	$("#search").focus(); //le pone el foco en el campo de búsqueda
	$("#search_form").submit(function(e){ 
		e.prevetDefault(); //evita el envio del formulario al dar al enter
	})

	$("#search").keyup(function(){
		var envio = $("#search").val();

		$("#logo").html("<h2>El buscador de tu web</h2> <hr />");
		$("#resultados").html('<h2><img src="img/loading.gif" width="20" /> Cargando</h2>');

		$.ajax({
			type: 'POST',
			url: 'php/buscador.php',
			data: ('search='+envio),
			success: function (respuesta){
				if(respuesta!='')
				{
					$("#resultados").html(respuesta);
				}
			}
		})
	})
})