<?php

//Array para guardar los campos del objeto Departamento y mostrarlos en la vista
$aVMtoDepartamentos = [];
    $aDepartamentos = DepartamentoPDO::buscarDepartamentoPorDesc($_SESSION['buscarDepartamentoPorCodigo']);
    if ($aDepartamentos) {
        //Recorro el array y por cada objeto...
        foreach ($aDepartamentos as $oDepartamento) {
            /**
             * Utilizo el método array_push para introducir los valores devueltos
             * por los getters para cada objeto departamento.
             */
            if ($oDepartamento->getFechaBaja() != null) {
                $fechaBaja = $oDepartamento->getFechaBaja()->format('d-m-Y H:i:s');
            } else {
                $fechaBaja = null;
            }
            array_push($aVMtoDepartamentos, [
                'codDepartamento' => $oDepartamento->getCodDepartamento(),
                'descDepartamento' => $oDepartamento->getDescDepartamento(),
                'fechaBaja' => $fechaBaja,
                'volumenNegocio' => $oDepartamento->getVolumenNegocio(),
                'fechaAlta' => $oDepartamento->getFechaAlta()
            ]);
        }
    } else {
        $aErrores['buscarDepartamento'] = "No se encuentra el departamento";
    }
if (isset($_REQUEST['volver'])) {//al pulsar se dirige a la ventana inicioPrivado
    $_SESSION['codDepartamentoEnCurso'] = null;
    $_SESSION['buscarDepartamentoPorCodigo'] = null;
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

if (isset($_REQUEST['buscarDesc'])) { //al pulsar se comprueba que el valor sea correcta
    $entradaOk = true;

    $aErrores['buscarDepartamento'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descDepto'], 255, 0, 0);
    foreach ($aErrores as $clave => $valor) {
        if ($valor != null) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        $_SESSION['buscarDepartamentoPorCodigo'] = $_REQUEST['descDepto'];
        } else {
            $aErrores['buscarDepartamento'] = "No se encuentra el departamento";
        }
       header('Location: index.php');
    exit; 
    }
if (isset($_REQUEST['editar'])) {//al pulsar se dirige a la ventana editarDepartamento
    $_SESSION['codDepartamentoEnCurso'] = $_REQUEST['editar'];
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'editarDepartamento';
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['borrar'])) { //al pulsar se borra el departamento especificado
    $_SESSION['codDepartamentoEnCurso'] = $_REQUEST['borrar'];
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'borrarDepartamento';
    header('Location: index.php');
}
require_once $aVistas['layout'];