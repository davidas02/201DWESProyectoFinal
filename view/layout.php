<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>LoginLogoff David Aparicio</title>
        <link rel="stylesheet" href="webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="doc/img/favicon.ico"/>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Aplicacion Final David Aparicio</h1>
                <h2><?php echo $_SESSION['paginaEnCurso']; ?></h2>
            </header>
            
            <?php require_once $aVistas[$_SESSION['paginaEnCurso']]; ?>
            <footer>
                <?php
                    if($_SESSION['paginaEnCurso']!="tecnologias"){
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="submit" value="Tecnologías" name="tecnologias" />
                </form>
                    <?php } ?>
                <a style="text-decoration: none; color: black;" href="https://www.renault.es" target="blank">Pagina a imitar</a>
                <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="doc/img/cv.png" alt="CV David Aparicio"/></a>
                <a href="../../201DWESProyectoDWES/indexProyectoDWES.php"><img src="doc/img/home.png" alt="HOME"/></a>
                <a href="https://www.github.com/davidas02/201DWESProyectoFinal" target="_blank"><img src="doc/img/git.png" alt="github David Aparicio"/></a>
                <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
            </footer>
        </div>
    </body>
</html>