<?php
$entradaOk = true;
if (isset($_REQUEST['cancelar'])) {//Si se pulsa cancelar vuelve a la pagina Anterior
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}

if(isset($_REQUEST['borrar'])){ //si se pulsa borrar se borra el usuario, se cierra la sesion y redirige al inicio publico
    UsuarioPDO::borrarUsuario($_SESSION['usuarioDAW201AppFinal']->getCodUsuario());
    session_destroy();
     $_SESSION['paginaEnCurso'] = "inicioPublico";
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];