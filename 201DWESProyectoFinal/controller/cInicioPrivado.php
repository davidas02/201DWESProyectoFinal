<?php
if (isset($_REQUEST['salir'])){
    $_SESSION['paginaEnCurso']='inicioPublico';
    $_SESSION['User204DWESLoginLogoff']=null;
    session_destroy();
    header("Location: index.php"); 
}
if(isset($_REQUEST['detalle'])){
    $_SESSION['paginaEnCurso']='detalle';
	$_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
}
if(isset($_REQUEST['modificar'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']='miCuenta';
    header("Location: index.php"); 
}
if(isset($_REQUEST['mtoDptos'])){
    $_SESSION['paginaEnCurso']='wip';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
}
if(isset($_REQUEST['error'])){
    $_SESSION['paginaEnCurso']="error";
    $_SESSION['error']=new ErrorLoginLogoff("666","Error de Prueba",$_SESSION['paginaEnCurso'], 1, $_SESSION['paginaAnterior']);
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
}
require_once $aVistas['layout'];
?>