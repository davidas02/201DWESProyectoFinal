<?php
if(isset($_REQUEST['volver'])){
$_SESSION['paginaEnCurso'] = $_SESSION['error']->getPaginaSiguiente();
    header('Location: index.php');
    exit();
}
$aError=["codError"=>$_SESSION['error']->getCodError(),
    "descError"=>$_SESSION['error']->getDescError(),
    "archivoError"=>$_SESSION['error']->getArchivoError(),
    "lineaError"=>$_SESSION['error']->getLineaError()
    ];
require_once $aVistas['layout'];
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

