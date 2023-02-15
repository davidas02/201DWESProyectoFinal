<?php
$aDepartamentos = DepartamentoPDO::buscarDepartamentoPorDesc("");
if (isset($_REQUEST['volver'])) {
    $_SESSION['codDepartamentoEnCurso']=null;
    $_SESSION['paginaEnCurso'] = 'inicioPrivado';
    header('Location: index.php');
    exit;
}
$aErrores = [
    "buscarDepartamento" => null
];
$aRespuestas = [
    "buscarDepartamento" => null
];
if (isset($_REQUEST['buscarDesc'])) {
    $entradaOk = true;

    $aErrores['buscarDepartamento'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descDepto'], 255, 0, 0);
    foreach ($aErrores as $clave => $valor) {
        if ($valor != null) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        $aRespuestas['buscarDepartamento'] = $_REQUEST['descDepto'];
        $aDepartamentos = DepartamentoPDO::buscarDepartamentoPorDesc($aRespuestas['buscarDepartamento']);
    }
}
if(isset($_REQUEST['editar'])){
    DepartamentoPDO::buscarDepartamentoPorCodigo($_REQUEST['editar']);
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'editarDepartamento';
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['borrar'])){
    $_SESSION['codDepartamentoEnCurso']=DepartamentoPDO::borrarDepartamento($_REQUEST['borrar']);
}
require_once $aVistas['layout'];
