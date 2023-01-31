<?php
if (isset($_REQUEST['salir'])){
    $_SESSION['paginaEnCurso']='inicioPublico';
    $_SESSION['User204DWESLoginLogoff']=null;
    session_destroy();
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['detalle'])){
    $_SESSION['paginaEnCurso']='detalle';
	$_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
if(isset($_REQUEST['modificar'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']='miCuenta';
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['mtoDptos'])){
    $_SESSION['paginaEnCurso']='wip';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['rest'])){
    $_SESSION['paginaEnCurso']='rest';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php");
    exit(); 
}
if(isset($_REQUEST['error'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    DBPDO::ejecutarConsulta("Select * from meInventoElNombreDeUnaTablaQueNoExiste;");
}
require_once $aVistas['layout'];
?>