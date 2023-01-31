<?php
if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if(isset($_REQUEST['cambiarPassword'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] ="cambiarPassword";
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['aceptar'])){
    $errorNombre= validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombre'], 255, 4, OBLIGATORIO);
    if ($errorNombre==null){
        UsuarioPDO::modificarUsuario($_SESSION['usuarioDAW201AppFinal'], $_REQUEST['nombre']);
        $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
        header('Location: index.php');
        exit();
    }
}
if(isset($_REQUEST['borrarUsuario'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']="borrarUsuario";
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
