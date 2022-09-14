<?php
        $user="root";
        $pass="destiny5";
        $server="localhost:3306";
        $db="polilearning";
        $conexion= new mysqli($server, $user, $pass, $db);

        if($conexion->connect_error){
            die("La conexion ha fallado" . $conexion->connect_error);
        } else{
            echo 'Conectado';
        }

?>