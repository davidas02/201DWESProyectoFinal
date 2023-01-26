<?php
interface DB {
    /**
     * Interfaz DB para la ejecucion de condultas sql
     */
    /**
     * Funcion de la interface DB para ejecutar consultas sql
     * @param type $entradaSQL entrada SQL
     * @param string $parametros parametros de la entrada
     */
    public static function ejecutarConsulta($entradaSQL, $parametros);
}
?>