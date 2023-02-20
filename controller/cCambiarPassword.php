<?php
if (isset($_REQUEST['volver'])) {//su se hace click sobre el boton volver vuelve a la pagina anterior
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
$aErrores = ['Apassword' => null,//Array de errores para su posterior muestra
    'Npassword' => null,
    'RNpassword' => null
];
if (isset($_REQUEST['cambiarPassword'])) {
    $entradaOk = true;
    $aErrores['Apassword'] = validacionFormularios::validarPassword($_REQUEST['Apassword'], 8, 4, 1, OBLIGATORIO);//inicializacion array de errores
    $aErrores['Npassword'] = validacionFormularios::validarPassword($_REQUEST['Npassword'], 8, 4, 1, OBLIGATORIO);
    $aErrores['RNpassword'] = validacionFormularios::validarPassword($_REQUEST['RNpassword'], 8, 4, 1, OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {//comprobacion si hay errores
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if (hash('sha256', $_SESSION['usuarioDAW201AppFinal']->getCodUsuario() . $_REQUEST['Apassword']) != $_SESSION['usuarioDAW201AppFinal']->getPassword()&&$_REQUEST['Apassword']!=null) { //comprobamos que la contraseña nueva y la antigua son diferentes
        $entradaOk = false;
        $aErrores['Apassword'] = "Contraseña incorrecta";
    }
    if ($_REQUEST['Npassword'] != $_REQUEST['RNpassword']) {
        $entradaOk = false;
        $aErrores['Npassword'] = "Las contraseñas son diferentes";
        $aErrores['RNpassword'] = "Las contraseñas son diferentes";
    }
    if (($_REQUEST['Apassword'] != $_REQUEST['Npassword']) && $entradaOk) {//comproamos que la contraseña nueva y la antigua son diferentes y la entrada es correcta
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

