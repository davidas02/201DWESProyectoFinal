<?php
$aDepartamento=[
    'codigo'=>$_SESSION['departamentoEnCurso']->getCodDepartamento(),
    'descripcion'=>$_SESSION['departamentoEnCurso']->getDescDepartamento(),
    'volumen'=>$_SESSION['departamentoEnCurso']->getVolumenNegocio()
        ];
if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
$aErrores = [
    "codigo" => null,
    "descripcion"=>null,
    "volumenNegocio"=>null
];
$aRespuestas = [
    "codigo" => null,
    "descripcion"=>null,
    "volumenNegocio"=>null
];
if (isset($_REQUEST['aceptar'])){
    $entradaOk=true;
    $aErrores=[
        "codigo"=> validacionFormularios::comprobarAlfabetico($_REQUEST["codigo"],3,3,OBLIGATORIO),
        "descripcion"=> validacionFormularios::comprobarAlfabetico($_REQUEST['descripcion'],255,5,OBLIGATORIO),
        "volumenNegocio"=> validacionFormularios::comprobarFloat($_REQUEST['volumen'], obligatorio: OBLIGATORIO)
    ];
    foreach ($aErrores as $clave => $valor) {
        if ($valor != null) {
            $entradaOk = false;
        }
    }
    if($entradaOk){
    $aRespuestas=[
        "codigo"=>$_REQUEST['codigo'],
        "descripcion"=> $_REQUEST['descripcion'],
        "volumenNegocio"=> $_REQUEST['volumen']
        ];
    DepartamentoPDO::modificarDepartamento($aRespuestas['codigo'], $aRespuestas['volumenNegocio'], $aRespuestas['descripcion']);
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
    }
}   
require_once $aVistas['layout'];