<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="dbtastenest";

    $conexion= new mysqli($server,$user,$password,$db);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    /*if($conexion){
        echo 'Conectado exitosamente a la base de datos';
    }else{
        echo 'imposible hacer la conexion, prende el mysql';
    }*/
?>