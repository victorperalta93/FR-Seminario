<?php
// muestra todos los errores generados por PHP en el navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "database.php";

// devuelve los polaroids de la base de datos en formato JSON
function pedirStock($nombre){
    $db = Database::getInstancia();
    $mysqli = $db->getConexion();

    $peticion = $mysqli->query("SELECT * FROM stock WHERE item LIKE '%$nombre%'");

    $stock = array();
    $i=0;
    while($fila = $peticion->fetch_assoc()){
        $stock[$i] = $fila;
        $i++;
    }

    return $stock;
}
?>