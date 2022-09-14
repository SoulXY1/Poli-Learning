<?php

        $user="0cod931r1crdz79hfu05";
        $pass="pscale_pw_5qxXOjyQRLzLUoDEGrh902ibvpzHlvOLgCXBz72v8Lm";
        $server="us-east.connect.psdb.cloud";
        $db="polilearning";
        $conexion= new mysqli($server, $user, $pass, $db);
        
        if($conexion->connect_error){
            die("La conexion ha fallado" . $conexion->connect_error);
        } else{
            echo 'Conectado';
        }

?>