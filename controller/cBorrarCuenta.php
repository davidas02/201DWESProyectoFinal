<?php

$usuarioCorrecto = true;
if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}

if (isset($_REQUEST['borrar'])) {
    if ($_SESSION['usuarioDAW201AppFinal']->getcodUsuario()!=$_REQUEST['usuario']||$_REQUEST['password'] != $_REQUEST['Rpassword'] || !UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password'])) {
        $usuarioCorrecto = false;
            }
    if ($usuarioCorrecto) {
        UsuarioPDO::borrarUsuario($_SESSION['usuarioDAW201AppFinal']->getCodUsuario());
        $_SESSION['usuarioDAW201AppFinal'] = null;
        session_destroy();
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header('Location: index.php');
        exit();
    }
}
require_once $aVistas['layout'];
