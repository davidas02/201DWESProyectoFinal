<?php

require_once 'conf/confDBPDO.php';

class DBPDO implements DB {
/**
 * Funcion para ejecutar una consulta SQL Es implementado de la clase DB
 * @param string $entradaSQL consulta sql
 * @param string $parametros parametros de la consulta
 * @return boolean Devuelve true si la consulta se ha ejecutado o false si la consulta no da ninfun resultado
 */
    public static function ejecutarConsulta($entradaSQL, $parametros = null) {
        try {
            $oPDO = new PDO(DSN, USER, PASSWORD);
            $consulta = $oPDO->prepare($entradaSQL);
            $consulta->execute($parametros);
            return $consulta;
        } catch (PDOException $exc) {
            header("Location: index.php");
            $_SESSION['error']=new ErrorLoginLogoff($exc->getCode(), $exc->getMessage(), $exc->getFile(), $exc->getLine(),$_SESSION['paginaAnterior']);
        } finally {
            unset($oPDO);
        }
    }

}
?>