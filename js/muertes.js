$(document).on("ready", inicio);

function inicio(){
	mostrarDatos();
	$("form").submit(function (event){
		event.preventDefault();

		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:$("form")..serialize(),
			success:function(respuesta){
				alert(respuesta)
			}
		});
	});
}

function mostrarDatos(valor){
	$.ajax({
		url:"http://localhost/paola/index.php/ciclo/mostrarmuertes",
		type:"POST",
		data:{buscar: valor},
		success:function(respuesta){
			alert(respuesta);
		}
	});
}