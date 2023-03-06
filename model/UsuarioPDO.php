<?php

class UsuarioPDO implements UsuarioDB {
    /**
     * Clase UsuarioPDO que implementa la clase UsuarioDB para el acceso a los datos de la tabla T_Usuario
     * @author David Aparicio
     * @version 1.1.3
     * 
     */

    /**
     * Funcion que valida el usuario
     * @param type $codUsuario usuario a Validar
     * @param type $password password a validar
     * @return boolean|\Usuario Si es correcto devuelve un objeto usuario si no devuelve false
     */
    public static function validarUsuario($codUsuario, $password) {
        $query = <<<QUERY
               select * from T01_Usuario where T01_CodUsuario="$codUsuario" AND T01_Password=sha2("{$codUsuario}{$password}",256);
               QUERY;
        $oResultado = DBPDO::ejecutarConsulta($query);
        $oDatos = $oResultado->fetchObject();
        if (is_object($oDatos)) {
            return new Usuario($oDatos->T01_CodUsuario, $oDatos->T01_Password, $oDatos->T01_DescUsuario, $oDatos->T01_NumConexiones, $oDatos->T01_FechaHoraUltimaConexion, $oDatos->T01_Perfil);
        } else {
            return false;
        }
    }

    /**
     * Clase que registra la fecha y la hora de la ultima conexion de un usuario
     * @param Usuario $oUsuario usuario al que actualizar la fecha y hora de la ultima conexion
     * @return boolean Devuelve true si se ha ejecutado correctamente y false si no se ha ejecutado correctamente
     */
    public static function registrarUltimaConexion($oUsuario) {
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones() + 1);
        $actualizar = <<<query
              UPDATE T01_Usuario SET T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now()
              WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
              query;
        $consultaEjecuada = DBPDO::ejecutarConsulta($actualizar);
        return $oUsuario;
    }

    /**
     * Función que da de alta un usuario en la base de datos
     * @param string $codUsuario codigo del usuario a dar de alta
     * @param string $password contraseña del usuario a dar de alta
     * @param string $descUsuario descripcion del usuario a dar de alta
     * @return boolean|\Usuario si se ha ejecutado correctamente devuelve un usuario si no devuelve false
     */
    public static function altaUsuario($codUsuario, $password, $descUsuario) {
        $alta = <<<sql
                INSERT INTO T01_Usuario values("{$codUsuario}",sha2("{$codUsuario}{$password}",256),"{$descUsuario}",now(),1,'usuario',null);
                sql;
        if (DBPDO::ejecutarConsulta($alta)) {
            return new Usuario($codUsuario, hash('sha256', ($codUsuario . $password)), $descUsuario, 1, new DateTime("now"));
        } else {
            return false;
        }
    }

    /**
     * Función que cambia la contraseña del usuario con el que estamos loggeado
     * @param Usuario $oUsuario usuario al cual vamos a cambiar la contraseña 
     * @param string $newPassword nueva contraseña
     * @return boolean si es correcto devuelve true si no false
     */
    public static function cambiarPassword($oUsuario, $newPassword) {
        $modificarUsuario = <<< sq3
            UPDATE T01_Usuario SET T01_Password="{$newPassword}" WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
        sq3;
        $ejecucionOK = DBPDO::ejecutarConsulta($modificarUsuario);
        if ($ejecucionOK) {
            $oUsuario->setPassword($newPassword);
        }
        return $ejecucionOK;
    }

    /**
     * Funcion que modifica la descripcion del usuario
     * @param Usuario $oUsuario usuario
     * @param string $descUsuario nueva descripcion del usuario
     */
    public static function modificarUsuario($oUsuario, $descUsuario) {
        $modificarUsuario = <<<sql
                UPDATE T01_Usuario set T01_DescUsuario="{$descUsuario}" WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
                sql;
        DBPDO::ejecutarConsulta($modificarUsuario);
        $oUsuario->setDescUsuario($descUsuario);
    }

    /**
     * Funcion que borra el usuario especificado por el codigo de la base de datos
     * @param string $codUsuario codigo del usuario a borrar
     */
    public static function borrarUsuario($codUsuario) {
        $query = <<<query
                delete from T01_Usuario where T01_CodUsuario='$codUsuario';
                query;
        DBPDO::ejecutarConsulta($query);
    }

    /**
     * Funcion que comprueba que el codigo de usuario que queremos introducir no existe
     * @param string $codUsuario codigo de usuario 
     * @return boolean $noExiste si exite el usuario devuelve true si no devuelve false
     */
    public static function validarCodNoExiste($codUsuario) {
        $noExiste = true;
        $query = <<< query
                select * from T01_Usuario where T01_CodUsuario="{$codUsuario}";
                query;
        $oResultado = DBPDO::ejecutarConsulta($query);
        $oDatos = $oResultado->fetchObject();
        if (!$oDatos) {
            $noExiste = false;
        }
        return $noExiste;
    }

    public static function buscarUsuarioPorDesc($descUsuario = "") {
        $query = <<< query
            select * from T01_Usuario where T01_DescUsuario LIKE '%{$descUsuario}%';
            query;
        $aUsuario = [];
        $resultado = DBPDO::ejecutarConsulta($query);
        $oUsuario = $resultado->fetchObject();
        if (is_object($oDepartamento)) {
            while ($oDepartamento != null) {
                $usuario=new Usuario($oDatos->T01_CodUsuario, $oDatos->T01_Password, $oDatos->T01_DescUsuario, $oDatos->T01_NumConexiones, $oDatos->T01_FechaHoraUltimaConexion, $oDatos->T01_Perfil);                array_push($aDepartamentos, $departamento);
                $oUsuario = $resultado->fetchObject();
            }
            return $aUsuario;
        } else {
            return false;
        }
    }

}

?>