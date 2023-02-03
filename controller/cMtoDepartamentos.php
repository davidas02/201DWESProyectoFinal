<?php
$aDepartamentos = DepartamentoPDO::buscarDepartamentoPorDesc("");
if (isset($_REQUEST['volver'])) {
    $_SESSION['departamentos'] = false;
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
$aErrores = [
    "buscarDepartamento" => null
];
$aRespuestas = [
    "buscarDepartamento" => null
];
if (isset($_REQUEST['buscar'])) {
    $entradaOk = true;

    $aErrores['buscarDepartamento'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['codDepto'], 255, 0, 0);
    foreach ($aErrores as $clave => $valor) {
        if ($valor != null) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        $aRespuestas['buscarDepartamento'] = $_REQUEST['codDepto'];
        $aDepartamentos = DepartamentoPDO::buscarDepartamentoPorDesc($aRespuestas['buscarDepartamento']);
    }
}
require_once $aVistas['layout'];
