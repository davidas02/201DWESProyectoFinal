<?php

class ErrorApp {

    private $codError;
    private $descError;
    private $archivoError;
    private $lineaError;
    private $paginaSiguiente;
    /**
     * Constructor ErrorLoginLogoff 
     * @param int $codError Codigo del Error
     * @param string $descError Descripcion del Error
     * @param string $archivoError Archivo del error
     * @param string $lineaError Linea del error
     * @param string $paginaSiguiente siguiente pagina
     */
    function __construct(int $codError,string $descError,string $archivoError,string $lineaError,string $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }
    /**
     *  Recoge el codigo del error y lo devuelve
     * @return string Codigo del error
     */
    function getCodError(){
        return $this->codError;
    }
    /**
     * Recoge la descripcion del error y la devuelve
     * @return string descripcion del error
     */
    function getDescError(){
        return $this->descError;
    }
    /**
     * Recoge la linea donde ocurre el error y la devuelve
     * @return int linea donde se ubica el error
     */
    function getLineaError() {
        return $this->lineaError;
    }
    /**
     * Recoge el archivo donde ocurre el error y lo devuelve
     * @return string archivo donde ocurre el error
     */
    function getArchivoError() {
        return $this->archivoError;
    }
    /**
     * recoge la pagina la cual mostrara cuando cerremos la ventana del error
     * @return string pagina siguiente
     */
    function getPaginaSiguiente() {
        return $this->paginaSiguiente;
    }

}

