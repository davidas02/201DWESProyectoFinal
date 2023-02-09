<?php
if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso']="inicioPrivado";
    header('Location: index.php');
}
require_once $aVistas['layout'];
?>

