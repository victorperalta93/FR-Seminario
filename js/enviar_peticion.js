const btnBuscar = document.getElementById("btnBuscar");

btnBuscar.onclick = function() {
	let consulta = document.getElementById("consulta").value;

	let request = new XMLHttpRequest();
	request.open('GET',"stock");
	request.setRequestHeader("Content-Type","application/json;charset=UTF-8");
	request.send(JSON.stringify({"consulta": consulta}));

	request.onload = function(){
		window.location.href = "panel-control";
	}

	// petición AJAX asíncrona 
	let xhr = new XMLHttpRequest();
	xhr.open('GET','principal/filtro/' + filtro,true);
	xhr.send();  

	// cuando se reciba la respuesta, modificar polaroids con el filtro
	xhr.onload = function(){
		document.getElementById('polaroids').innerHTML = xhr.response;
	}
}