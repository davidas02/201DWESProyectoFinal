<?php
$_SESSION['departamentos']=DepartamentoPDO::buscarDepartamentoPorDesc("");
if(isset($_REQUEST['volver'])){
    $_SESSION['departamentos']=false;
    $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['buscar'])){
    $entradaOk=true;
    $aErrores=[
        "buscarDepartamento"=>null
    ];
    $aRespuestas=[
        "buscarDepartamento"=>null
    ];
    $aErrores['buscarDepartamento']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['codDepto'], 255, 0, 0);
    foreach ($aErrores as $clave => $valor) {
        if($valor!=null){
            $entradaOk=false;
        }
    }
    if($entradaOk){
        $aRespuestas['buscarDepartamento']=$_REQUEST['codDepto'];
        $_SESSION['departamentos']=DepartamentoPDO::buscarDepartamentoPorDesc($aRespuestas['buscarDepartamento']);
    }
}
require_once $aVistas['layout'];