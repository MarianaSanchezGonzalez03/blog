<?php
function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=blog_practica','root', '');//code...
        return $conexion;
    } catch (PDOExeption Se) {
        return false;
    }
}

function limpiarDatos($datos){
$datos= trim($datos);
$datos = stripcslashes($datos);
$datos = htmlspecialchars($datos);
return $datos;

}
]
}



?>