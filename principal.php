<?php 
require_once 'modelo/stock.php';
require_once 'entorno.php';

function stock($stock){
    return pedirStock($stock);
}

function renderizarPrincipal($stock){
    $entorno = Entorno::getInstancia();
    $variables = [
        "stock" => stock($stock)
    ];

    echo $entorno->renderizar("index.html",$variables);
}