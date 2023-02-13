<?php

$entradaOk = true;
if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}

if(isset($_REQUEST['aceptar'])){
    UsuarioPDO::borrarUsuario($_SESSION['usuarioDAW201AppFinal']->getCodUsuario());
    session_destroy();
     $_SESSION['paginaEnCurso'] = "inicioPublico";
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
