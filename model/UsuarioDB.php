<?php
interface UsuarioDB {
/**
 * Funcion validadora del usuario
 * @param type $codUsuario
 * @param type $password
 */
    public static function validarUsuario($codUsuario,$password);
}
?>
