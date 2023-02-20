<?php

require_once 'core/221024ValidacionFormularios.php';

if (isset($_REQUEST['cancelar'])) {//al pulsar se dirige a la ventana inicioPublico
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    header('Location: index.php');
    exit();
}
if(isset($_REQUEST['registro'])){//al pulsar se dirige a la ventana Registro
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']="registro";
    header('Location: index.php');
}
$aErrores = [
        'usuario' => null,
        'password' => null
    ];
if (isset($_REQUEST['iniciarSesion'])) {
    
    $entradaOk = true;
    $oUsuario = null;
    //Comprobamos que el usuario no haya introducido inyeccion de codigo y los datos están correctos
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, OBLIGATORIO);
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        //Comprobación de Usuario Correcto
        $oUsuario = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
        if (is_bool($oUsuario)) {
            $entradaOk = false;
        }
    }
//   si no se ha pulsado iniciar sesion le pedimos que muestre el formulario de inicio
    if ($entradaOk) {
        UsuarioPDO::registrarUltimaConexion($oUsuario);
        $_SESSION['usuarioDAW201AppFinal'] = $oUsuario;
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header("Location: index.php");
    }
}
require_once $aVistas['layout'];
?>

