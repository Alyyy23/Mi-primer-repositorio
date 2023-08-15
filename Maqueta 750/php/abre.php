<?php
    $conexion= new mysqli('localhost', 'root', '', 'id20691403_universidad');
    if($conexion){
        echo "CONEXION EXITOSA";
    }else {
        echo "NO FUNCIONO LA CONEXION";
    }
?>