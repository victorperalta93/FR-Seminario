const btnEventos = document.getElementById("btnEventos");

// AÑADIR EVENTO
function addEvento() {
	let titulo      = document.getElementById("tituloE").value;
	let organizador = document.getElementById("organizadorE").value;
	let fecha       = document.getElementById("fechaE").value;
	let descripcion = document.getElementById("descripcionE").value;
	let titulo_imagen1   = tituloImg1.value;
	let titulo_imagen2   = tituloImg2.value;
	let creditos_imagen1 = creditosImg1.value;
	let creditos_imagen2 = creditosImg2.value;

	let request = new XMLHttpRequest();
	request.open('POST',"eventos");
	request.setRequestHeader("Content-Type","application/json;charset=UTF-8");
	request.send(JSON.stringify({
								"titulo"           : titulo,
								"organizador"      : organizador,
								"fecha"            : fecha,
								"descripcion"      : descripcion,
								"titulo_imagen1"   : titulo_imagen1,
								"titulo_imagen2"   : titulo_imagen2,
								"creditos_imagen1" : creditos_imagen1,
								"creditos_imagen2" : creditos_imagen2,
								"dir_imagenP"      : dir_imgP,
								"dir_imagen1"      : dir_img1,
								"dir_imagen2"      : dir_img2,
	}));

	request.onload = function(){
		window.location.href = "panel-control";
	}
}