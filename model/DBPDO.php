<?php

require_once 'conf/confDBPDO.php';
/**
 * Clase que implementa la clase DB para ejecutar una consulta
 */
class DBPDO implements DB {
/**
 * Funcion para ejecutar una consulta SQL Es implementado de la clase DB
 * @param string $entradaSQL consulta sql
 * @param array $parametros parametros de la consulta
 * @return boolean $consulta Devuelve true si la consulta se ha ejecutado o false si la consulta no da ningun resultado
 */
    public static function ejecutarConsulta($entradaSQL, $parametros = null) {
        try {
            $oPDO = new PDO(DSN, USER, PASSWORD);
            $consulta = $oPDO->prepare($entradaSQL);
            $consulta->execute($parametros);
            return $consulta;
        } catch (PDOException $exc) {
            $_SESSION['error']=new ErrorApp($exc->getCode(), $exc->getMessage(), $exc->getFile(), $exc->getLine(),$_SESSION['paginaAnterior']);
            $_SESSION['paginaEnCurso'] = 'error';
            header('Location: index.php');
            exit;
        } finally {
            unset($oPDO);
        }
    }

}
?>