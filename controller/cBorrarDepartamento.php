<?php

if (isset($_REQUEST['cancelar'])) {//al pulsar vuelve a la pagina anterior
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if(isset($_REQUEST['borrar'])){
    DepartamentoPDO::borrarDepartamento($_SESSION['codDepartamentoEnCurso']);
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit(); 
}
$oDepartamento= DepartamentoPDO::buscarDepartamentoPorCodigo($_SESSION['codDepartamentoEnCurso']);//Buscamos el departamento especificado por el codigo en la base de datos y lo devolvemos como un objeto de la clase departamento
$aVDepartamento=[//Recogemos los datos del objeto departamento y los introducimos en el array
    'codigo'=>$oDepartamento->getCodDepartamento(),
    'descripcion'=>$oDepartamento->getDescDepartamento(),
    'volumen'=>$oDepartamento->getVolumenNegocio(),
    'fechaAlta'=>$oDepartamento->getFechaAlta(),
    'fechaBaja'=>$oDepartamento->getFechaBaja()
        ];
require_once $aVistas['layout'];