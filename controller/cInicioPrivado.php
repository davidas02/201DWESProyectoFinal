<?php
if (isset($_REQUEST['salir'])){//al pulsar se cierra la sesion y vuelve al inicio publico
    $_SESSION['paginaEnCurso']='inicioPublico';
    $_SESSION['usuarioDAW201AppFinal']=null;
    session_destroy();
    $_SESSION['paginaEnCurso']='inicioPublico';
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['detalle'])){//al pulsar se dirige a la ventana de detalle
    $_SESSION['paginaEnCurso']='detalle';
	$_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
if(isset($_REQUEST['modificar'])){//al pulsar se dirige a la ventana miCuenta
    $_SESSION['paginaAnterior']='inicioPrivado';
    $_SESSION['paginaEnCurso']='miCuenta';
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['mtoDptos'])){ //al pulsar se dirige a la ventana mtoDepartamentos
    $_SESSION['buscarDepartamentoPorCodigo'] ="";
    $_SESSION['paginaEnCurso']='mantenimientoDepartamentos';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['rest'])){// al pulsar se dirige a la ventana del rest
    $_SESSION['paginaEnCurso']='rest';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['error'])){ //al pulsar se dirige a la ventana error
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    DBPDO::ejecutarConsulta("Select * from meInventoElNombreDeUnaTablaQueNoExiste;");
     header("Location: index.php");
    exit(); 
}
require_once $aVistas['layout'];
?>