<?php
/**
 * Interfaz de la conexion entre el usuario y la base de datos
 * @author David Aparicio
 * @version 1.1.3
 * 
 */
interface UsuarioDB {
    
/**
 * Funcion validadora del usuario
 * @param string $codUsuario codigo del usuario
 * @param string $password contraseña del usuario
 */
    public static function validarUsuario($codUsuario,$password);
}
?>
