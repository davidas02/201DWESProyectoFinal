<?php
if (isset($_REQUEST['volver'])) {//al pulsar se dirige a la ventana inicioPrivado
    $_SESSION['paginaEnCurso'] = 'inicioPrivado';
    header('Location: index.php');
    exit();
}
if(isset($_REQUEST['cambiarPassword'])){ //al pulsar se dirige a la ventana cambiarPassword
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] ="cambiarPassword";
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['aceptar'])){//al pulsar comprueba que el valor intorducido sea correcto y si es correcto modifica el usuario
    $errorNombre= validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombre'], 255, 4, OBLIGATORIO);
    if ($errorNombre==null){
        UsuarioPDO::modificarUsuario($_SESSION['usuarioDAW201AppFinal'], $_REQUEST['nombre']);
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header('Location: index.php');
        exit();
    }
}
if(isset($_REQUEST['borrarUsuario'])){ //al pulsar se dirige a la ventana borrarUsuario
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']="borrarUsuario";
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];

