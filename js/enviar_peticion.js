const btnBuscar = document.getElementById("btnBuscar");

btnBuscar.onclick = function() {
	let consulta = document.getElementById("consulta").value;

	let request = new XMLHttpRequest();
	request.open('GET',"stock");
	request.setRequestHeader("Content-Type","application/json;charset=UTF-8");
	request.send(JSON.stringify({"consulta": consulta}));
}