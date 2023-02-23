<?php
/**
 * Clase relacionada con el Usuario de la aplicacion
 * @author David Aparicio
 * @version 1.1.3
 * 
 */
class Usuario{
    
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;
    /**
     * Constructor de la clase Usuario
     * @param string $codUsuario codigo del usuario
     * @param string $password contraseña del usuario
     * @param string $descUsuario descripcion del usuario
     * @param int $numConexiones numero de conexiondes del usuario
     * @param DateTime $fechaHoraUltimaConexionAnterior fecha de la anterior conexion
     */
    public function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexionAnterior,$perfil="usuario") {
        $this->codUsuario= $codUsuario;
        $this->password=$password;
        $this->descUsuario=$descUsuario;
        $this->numConexiones=$numConexiones;
        $this->fechaHoraUltimaConexion= new DateTime("now");
        $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
        $this->perfil= $perfil;
    }
    /**
     * Recoge el codigo del usuario y lo devuelve
     * @return string codigo del usuario
     */
    function getCodUsuario(){
        return $this->codUsuario;
    }
    /**
     * Recoge el password del usuario y lo devuelve
     * @return string password del usuario
     */
    function getPassword() {
        return $this->password;
    }
    /**
     * 
     * @return type
     */
    function getDescUsuario(){
        return $this->descUsuario;
    }
    /**
     * Recoge el numero de conexiones del usuario y lo devuelve
     * @return int numero de conexiones del usuario
     */
    function getNumConexiones() {
        return $this->numConexiones;
    }
    /**
     * Recoge el la fecha y la hora de la conexion del usuario y lo devuelve
     * @return Datetime fecha y hora de la conexion del usuario
     */
    function getFechaHoraUltimaConexion(){
        return $this->fechaHoraUltimaConexion;
    }
    /**
     * Recoge el la fecha y la hora de la ultima conexion del usuario y lo devuelve
     * @return Datetime fecha y hora de la ultima conexion del usuario
     */
    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    /**
     * Recoge el tipo de perfil y lo devuelve
     * @return string Devuelve "usuario" o "administrador"
     */
    function getPerfil() {
        return $this->perfil;
    }
    /**
     * Establece el codigo del usuario
     * @param string $codUsuario nuevo codigo del usuario
     */
    function setCodUsuario($codUsuario){
        $this->codUsuario=$codUsuario;
    }
    /**
     * Establece el nuevo password del usuario
     * @param string $password nuevo password del usuario
     */
    function setPassword($password) {
        $this->password=$password;
    }
    /**
     * Establece la nueva descripcion del usuario
     * @param string $descUsuario
     */
    function setDescUsuario($descUsuario){
        $this->descUsuario=$descUsuario;
    }
    /**
     * Establece el numero de conexiones del usuario acutal
     * @param int $numConexiones numero de conexiones del usuario actual
     */
    function setNumConexiones($numConexiones) {
        $this->numConexiones=$numConexiones;
    }
    /**
     * Establece la fecha y hora de la conexion actual
     * @param Datetime $fechaHoraUltimaConexion fecha y hora de la conexion actual
     */
    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion){
        $this->fechaHoraUltimaConexion=$fechaHoraUltimaConexion;
    }
    /**
     * Establece la fecha y la hora de la conexion anterior
     * @param DateTime $fechaHoraUltimaConexionAnterior fecha y hora de la conexion anterior
     */
    function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior) {
        $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
    }
    /**
     * Establece el tipo de perfil
     * @param string $perfil tipo de perfil del usuario
     */
    function setPerfil($perfil) {
        $this->perfil=$perfil;
    }
}

