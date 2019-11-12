<?php 
require_once 'modelo/polaroids.php';
require_once 'modelo/usuarios.php';
require_once 'utils.php';
require_once 'entorno.php';

function polaroids($etiqueta){
    return pedirPolaroids($etiqueta);
}


function renderizarPrincipal(){
    $entorno = Entorno::getInstancia();
    $variables = [
        "polaroids" => polaroids("all"),
        "usuario"   => comprobarUsuario()
    ];

    echo $entorno->renderizar("principal.html",$variables);
}

function aplicarFiltro($etiqueta){
    $entorno = Entorno::getInstancia();
    $variables = [
        "polaroids" => polaroids($etiqueta)
    ];

    echo $entorno->renderizarBloque("principal.html","content",$variables);
}