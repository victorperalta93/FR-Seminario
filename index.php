<?php 
require_once 'modelo/eventos.php';

// Recibe la URI de htaccess en formato "limpio"
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/"){
    $array_uri = array(
        0    => "",
        1  => "principal"
    );
}
else{
    // Separar URI utilizando como delimitador "/" y guardar cada string en un array
    $array_uri = explode("/",$uri);
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    switch($array_uri[1]){
        case 'panel-control':
            renderizarPanelControl();
            break;
        case "favicon.ico":
            echo "imgs/favicon.png";
            break;
        default:
            http_response_code(404);
            break;
    }
}