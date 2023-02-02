<?php
if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if(isset($_REQUEST['cambiarPassword'])){
    $aErrores=[
        'Apassword'=>null,
        'Npassword'=>null,
        'RNpassword'=>null
    ];
    $entradaOk=true;
    if($_REQUEST['Apassword']!=$_REQUEST['Npassword']&&$_REQUEST['Npassword']==$_REQUEST['RNpassword']){
        $aErrores['Apassword'] = validacionFormularios::validarPassword($_REQUEST['Apassword'], 8, 4, 1, obligatorio: 1);
        $aErrores['Npassword'] = validacionFormularios::validarPassword($_REQUEST['Npassword'], 8, 4, 1, obligatorio: 1);
        $aErrores['RNpassword'] = validacionFormularios::validarPassword($_REQUEST['RNpassword'], 8, 4, 1, obligatorio: 1);
        foreach ($aErrores as $claveError => $mensajeError) {
            if ($mensajeError != null) {
                $entradaOk = false;
            }
        }
        if(hash('sha256', $_SESSION['usuarioDAW201AppFinal']->getCodUsuario().$_REQUEST['Apassword'])!=$_SESSION['usuarioDAW201AppFinal']->getPassword()||$_REQUEST['Apassword']==$_REQUEST['Npassword']||$_REQUEST['Npassword']!=$_REQUEST['RNpassword']){
            $entradaOk = false;
        }
        if($entradaOk){
            $password=hash('sha256',($_SESSION['usuarioDAW201AppFinal']->getCodUsuario().$_REQUEST['Npassword']));
        UsuarioPDO::cambiarPassword($_SESSION['usuarioDAW201AppFinal'], $password);
        }
    }
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];


