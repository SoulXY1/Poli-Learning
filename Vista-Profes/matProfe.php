<?php
session_start();
$nombreT = $_SESSION['nombreTeacher'];
$materiaT = $_SESSION['materiaTeacher'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Materias</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="indexProfe.php">
                    <img src="../img/logo_blanco2.png" alt="Logo de Poli">
                </a>

                <nav class="navegacion">
                    <a href="indexProfe.php">Inicio</a>
                    <a href="matProfe.php">Materias</a>
                    <a href="perfilProfe.php">Perfil</a>
                </nav>
            </div>
        </div>
    </header>


    <section class="imagen-materia" style="background-image: url(../img/barnav.png);">
        <div class="contenedor contenido-materia-head">
            <h2><?php echo $materiaT; ?></h2>
            <p>Profesor: <?php echo $nombreT; ?></p>
        </div>
    </section>

    <main class="seccion contenedor">

        <div class="modulo">
            <div class="tareas-section">
                <h2>Módulo 1: Nombre de módulo</h2>
                <p class="tarea"><a href="tareaProfe.php">Tarea 1: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 2: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 3: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 4: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 5: </a></p>
            </div>
        </div>

        <div class="divide"></div>

        <div class="modulo">
            <div class="tareas-section">
                <h2>Módulo 2: Nombre de módulo</h2>
                <p class="tarea"><a href="tareaProfe.php">Tarea 1: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 2: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 3: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 4: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 5: </a></p>
            </div>
        </div>

        <div class="divide"></div>

        <div class="modulo">
            <div class="tareas-section">
                <h2>Módulo 3: Nombre de módulo</h2>
                <p class="tarea"><a href="tareaProfe.php">Tarea 1: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 2: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 3: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 4: </a></p>
                <p class="tarea"><a href="tareaProfe.php">Tarea 5: </a></p>
            </div>
        </div>
    </main>


    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="indexProfe.php">Inicio</a>
                <a href="matProfe.php">Materias</a>
                <a href="perfilProfe.php">Perfil</a>
                <a href="../Backend/logout.php">Cerrar Sesión</a>
            </nav>
            <p class="copyright">Av, Revolución No. 1500, Col. Universitaria, C. P. 44420, Guadalajara, Jalisco, México<br>+52 33 3619 9814/8315 Ext. 101 y 102</p>

        </div>
    </footer>
</body>

</html>