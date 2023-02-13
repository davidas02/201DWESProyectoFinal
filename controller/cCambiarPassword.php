<?php

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
$aErrores = ['Apassword' => null,
    'Npassword' => null,
    'RNpassword' => null
];
if (isset($_REQUEST['cambiarPassword'])) {
    $entradaOk = true;
    $aErrores['Apassword'] = validacionFormularios::validarPassword($_REQUEST['Apassword'], 8, 4, 1, OBLIGATORIO);
    $aErrores['Npassword'] = validacionFormularios::validarPassword($_REQUEST['Npassword'], 8, 4, 1, OBLIGATORIO);
    $aErrores['RNpassword'] = validacionFormularios::validarPassword($_REQUEST['RNpassword'], 8, 4, 1, OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if (hash('sha256', $_SESSION['usuarioDAW201AppFinal']->getCodUsuario() . $_REQUEST['Apassword']) != $_SESSION['usuarioDAW201AppFinal']->getPassword()&&$_REQUEST['Apassword']!=null) {
        $entradaOk = false;
        $aErrores['Apassword'] = "Contraseña incorrecta";
    }
    if ($_REQUEST['Npassword'] != $_REQUEST['RNpassword']) {
        $aErrores['Npassword'] = "Las contraseñas son diferentes";
        $aErrores['RNpassword'] = "Las contraseñas son diferentes";
    }
    if (($_REQUEST['Apassword'] != $_REQUEST['Npassword'] && $_REQUEST['Npassword'] == $_REQUEST['RNpassword']) && $entradaOk) {
        if ($entradaOk) {
            $password = hash('sha256', ($_SESSION['usuarioDAW201AppFinal']->getCodUsuario() . $_REQUEST['Npassword']));
            UsuarioPDO::cambiarPassword($_SESSION['usuarioDAW201AppFinal'], $password);
            $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
            header('Location: index.php');
            exit();
        }
    }
}
require_once $aVistas['layout'];

