<?php
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
if (isset($_REQUEST['volver'])) {//al pulsar se dirige a la ventana inicioPrivado
    $_SESSION['paginaEnCurso'] = 'inicioPrivado';
    $_SESSION['muestraApiAjena']=null;
    header('Location: index.php');
    exit();
}
$aRespuestas=[
    "valor"=>null,
    "origen"=>null,
    "destino"=>null,
];
$muestra=null;
if(isset($_REQUEST['convertir'])){//al pulsar comprueba que el valor introducido sea un numero real
    $entradaOk=true;
    $aErrores=[
        'cantidad'=>null
    ];
    $aErrores['cantidad']= validacionFormularios::comprobarFloat($_REQUEST['cantidad'], min: 0, obligatorio: OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
            $_REQUEST[$claveError]='';
        }
    }
    //Si todo esta OK y la moneda de origen y destino son diferentes se ejecuta
    if($entradaOk&&$_REQUEST['origen']!=$_REQUEST['destino']){
        $aRespuestas=[
            "valor"=>$_REQUEST['cantidad'],
            "origen"=>$_REQUEST['origen'],
            "destino"=>$_REQUEST['destino']
        ];
        $salida= REST::convertirMoneda($aRespuestas['valor'], $aRespuestas['origen'],$aRespuestas['destino']);
           
    }
    //si la salida es diferente a false y la salida es diferente a null se muestra el siguiente mensaje si no no se muestra nada
    if($salida!=false && !is_null($salida)){
        $_SESSION['muestraApiAjena']=$aRespuestas['valor']." ".$aRespuestas['origen']." es igual a ". $salida." ".$aRespuestas['destino'];
    }else{
        $_SESSION['muestraApiAjena']=null;
    }
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];

