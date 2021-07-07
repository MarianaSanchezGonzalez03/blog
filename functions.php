<?php
//hace la conexion a la base de datos
function conexion($bd_config){

    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

//Limpia los datos
function limpiarDatos($datos){
$datos= trim($datos);
$datos = stripcslashes($datos);
$datos = htmlspecialchars($datos);
return $datos;

}
//cuengta en el numero de pagunas en el que se encuentra
function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p']: 1 ;
}
//Obtiene los posts, conectando a la BD y trayendo el num de pagina
function obtener_post($post_por_pagina, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}
?>