<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="dbtastenest";

    $conexion= new mysqli($server,$user,$password,$db);

    if($conexion){
        echo 'Conectado exitosamente a la base de datos';
    }else{
        echo 'imposible hacer la conexion, prende el mysql';
    }
?>