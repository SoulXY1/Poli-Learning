<?php
session_start();
$nombre = $_SESSION['nombreStudent'];
$codigo = $_SESSION['codigoStudent'];
$correo = $_SESSION['correoStudent'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Perfil</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="indexStudent.php">
                    <img src="img/logo_blanco2.png" alt="Logo de Poli">
                </a>

                <nav class="navegacion">
                    <a href="indexStudent.php">Inicio</a>
                    <a href="materias.php">Materias</a>
                    <a href="perfil.php">Perfil</a>
                </nav>
            </div>
        </div>
    </header>


    <main class="contenedor seccion contenido-centrado">
        <h1 class="fw-300 centrar-texto">Información del usuario</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/profile.png" alt="Entrada de blog" style="width: 250px;">
            </div>
            <div class="texto-entrada">
                
            <h4><?php echo $nombre?> / Estudiante</h4>

                <p>Código: <span><?php echo $codigo?></p></span>
                <p>Correo: <span><?php echo $correo?></p></span>
                <p>Plantel: <span>Escuela Politécnica De Guadalajara</span></p>
                <p>Ciudad y país: <span>Guadalajara, Mexico</span></p>
                
            </div>
        </article>
        <div class="ver-todas">
            <a href="Backend/logout.php" class="boton boton-amarillo">Cerrar Sesión</a>
        </div>
    </main>

    <footer class="seccion footer-bttm">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="indexStudent.php">Inicio</a>
                <a href="materias.php">Materias</a>
                <a href="perfil.php">Perfil</a>
                <a href="Backend/logout.php">Cerrar Sesión</a>
            </nav>
            <p class="copyright">Av, Revolución No. 1500, Col. Universitaria, C. P. 44420, Guadalajara, Jalisco, México<br>+52 33 3619 9814/8315 Ext. 101 y 102</p>

        </div>
    </footer>

</body>

</html>