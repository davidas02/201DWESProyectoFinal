<?php
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
$aRespuestas=[
    "valor"=>null,
    "origen"=>null,
    "destino"=>null
];
$muestra=null;
if(isset($_REQUEST['convertir'])){
    
    $entradaOk=true;
    $aErrores=[
        'cantidad'=>null
    ];
    $aErrores['cantidad']= validacionFormularios::comprobarFloat($_REQUEST['cantidad'], min: 0, obligatorio: OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    
    if($entradaOk&$_REQUEST['origen']!=$_REQUEST['destino']){
        $aRespuestas=[
            "valor"=>$_REQUEST['cantidad'],
            "origen"=>$_REQUEST['origen'],
            "destino"=>$_REQUEST['destino']
        ];
        $salida= REST::convertirMoneda($aRespuestas['valor'], $aRespuestas['origen'],$aRespuestas['destino']);
    }
    $muestra=$aRespuestas['valor']." ".$aRespuestas['origen']." es igual a ". $salida.$aRespuestas['destino'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];

