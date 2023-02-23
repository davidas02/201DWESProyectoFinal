<?php
/**
     * Interfaz DB para la ejecucion de consultas sql
     */
interface DB {
    
    /**
     * Funcion de la interface DB para ejecutar consultas sql
     * @param string $entradaSQL entrada SQL
     * @param array $parametros parametros de la entrada
     */
    public static function ejecutarConsulta($entradaSQL, $parametros);
}
?>