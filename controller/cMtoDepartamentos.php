<?php

if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['buscar'])){
    $entradaOk=true;
    $aErrores=[
        "buscarDepartamento"=>null
    ];
    $aErrores['buscarDepartamento']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['codDepto'], 255, 0, 0);
    foreach ($aErrores as $clave => $valor) {
        if($valor!=null){
            $entradaOk=false;
        }
    }
    if($entradaOk){
        $aDepartamentos=DepartamentoPDO::buscarDepartamentoPorDescripcion($_REQUEST['codDepto']);
    }
}
require_once $aVistas['layout'];