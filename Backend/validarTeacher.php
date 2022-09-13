<?php

include('conexion.php');
session_start();

$codigoT = $_POST['codigoTeacher'];
$passwordT = $_POST['passwordTeacher'];



$consulta = "SELECT*FROM teachers WHERE codigoTeacher='$codigoT' AND passwordTeacher='$passwordT'";
$res = $conexion->query($consulta);

$row = $res->fetch_assoc();

if($row['codigoTeacher'] == $codigoT && $row['passwordTeacher'] == $passwordT){

    $nombreT=$row['nombreTeacher'];
    $correoT=$row['correoTeacher'];
    $materiaT=$row['materiaTeacher'];
    
    $_SESSION['nombreTeacher'] = $nombreT;
    $_SESSION['codigoTeacher'] = $codigoT;
    $_SESSION['correoTeacher'] = $correoT;
    $_SESSION['materiaTeacher'] = $materiaT;

    header("location: ../Vista-Profes/indexProfe.php"); 
} else{
    echo '<script language="javascript">alert("juas");</script>'; 
    header("location: ../Vista-Profes/iniciarProfes.php");
    
}

?>