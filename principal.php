<?php 
require_once 'modelo/stock.php';
require_once 'entorno.php';

function stock($stock){
    return pedirStock($stock);
}

function renderizarPrincipal($stock){
    if($stock){
        $datos = json_decode(file_get_contents('php://input'));

        $variables = [
            "stock" => stock($datos->consulta)
        ];
    }
    else{
        $variables = [];
    }

    $entorno = Entorno::getInstancia();
    echo $entorno->renderizar("index.html.twig",$variables);
}