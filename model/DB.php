<?php
interface DB {
    /**
     * Interfaz DB para la ejecucion de condultas sql
     */
    /**
     * Funcion de la interface DB para ejecutar consultas sql
     * @param string $entradaSQL entrada SQL
     * @param array $parametros parametros de la entrada
     */
    public static function ejecutarConsulta($entradaSQL, $parametros);
}
?>