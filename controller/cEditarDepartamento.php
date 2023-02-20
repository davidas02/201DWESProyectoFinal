<?php
$oDepartamento= DepartamentoPDO::buscarDepartamentoPorCodigo($_SESSION['codDepartamentoEnCurso']);//Buscamos el departamento especificado por el codigo en la base de datos y lo devolvemos como un objeto de la clase departamento
$aDepartamento=[//Recogemos los datos del objeto departamento y los introducimos en el array
    'codigo'=>$oDepartamento->getCodDepartamento(),
    'descripcion'=>$oDepartamento->getDescDepartamento(),
    'volumen'=>$oDepartamento->getVolumenNegocio(),
    'fechaAlta'=>$oDepartamento->getFechaAlta(),
    'fechaBaja'=>$oDepartamento->getFechaBaja()
        ];
if (isset($_REQUEST['volver'])) {//al pulsar vuelve a la pagina anterior
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
$aErrores = [ //array de errores
    "codigo" => null,
    "descripcion"=>null,
    "volumenNegocio"=>null
];
$aRespuestas = [ //array de respuestas
    "codigo" => null,
    "descripcion"=>null,
    "volumenNegocio"=>null
];
if (isset($_REQUEST['aceptar'])){//al hacer clic en el boton aceptar comprobaremos los campos y si son correctos modificaremos los valores por los escritos
    $entradaOk=true;
    $aErrores=[//validamos las entradas y si hay algun error se guardará en este array
        "codigo"=> validacionFormularios::comprobarAlfabetico($_REQUEST["codigo"],3,3,OBLIGATORIO),
        "descripcion"=> validacionFormularios::comprobarAlfabetico($_REQUEST['descripcion'],255,5,OBLIGATORIO),
        "volumenNegocio"=> validacionFormularios::comprobarFloat($_REQUEST['volumen'], obligatorio: OBLIGATORIO)
    ];
    foreach ($aErrores as $clave => $valor) {//comprobamos que no hay errores
        if ($valor != null) {
            $entradaOk = false;
        }
    }
    if($entradaOk){//si la entrada es correcta se modifican los valores en la base de datos
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