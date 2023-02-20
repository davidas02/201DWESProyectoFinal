<?php
if (isset($_REQUEST['login'])) {//al pulsar se dirige a la ventana login
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']='login';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout'];
?>