<?php
        $user="root";
        $pass="";
        $server="localhost";
        $db="polilearning";
        $conexion= new mysqli($server, $user, $pass, $db);

        if($conexion->connect_error){
            die("La conexion ha fallado" . $conexion->connect_error);
        } else{
            echo 'Conectado';
        }

?>