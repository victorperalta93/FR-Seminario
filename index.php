<?php 
require_once 'principal.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
        case 'principal':
            renderizarPrincipal(false);
            break;
        case 'stock':
            renderizarPrincipal(false);
            break;
        case "favicon.ico":
            echo "imgs/favicon.png";
            break;
        default:
            http_response_code(404);
            break;
    }
}