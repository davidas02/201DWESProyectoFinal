<?php
if(isset($_REQUEST['volver'])){//si pulsamos sobre el boton volver volvemos a la pagina de inicio privado
    $_SESSION['paginaEnCurso']="inicioPrivado";
    header('Location: index.php');
}
require_once $aVistas['layout'];
?>

