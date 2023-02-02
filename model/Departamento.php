<?php
class Departamento {
    /**
     * Clase Departamento para crear objetos Departamento
     * @author David Aparicio
     * @since 1.2.1
     */
    /**
     * Codigo del Departamento
     * @var string
     */
    private $codDepartamento;
    /**
     * Descripcion del Departamento
     * @var string
     */
    private $descDepartamento;
    /**
     * Fecha de Baja Logica del Departamento(en caso de que lo esté)
     * @var DateTime
     */
    private $fechaBaja;
    /**
     * Cantidad de dinero generado
     * @var float
     */
    private $volumenNegocio;
    /**
     * Fecha de la creacion o de la recuperación de la Baja Logica del Departamento
     * @var DateTime
     */
    private $fechaAlta;
    /**
     * Constuctor del Departamento(Creador)
     * @param string $codDepartamento
     * @param string $descDepartamento
     * @param int $fechaBaja
     * @param float $volumenNegocio
     * @param string $fechaAlta
     */
    function __construct($codDepartamento,$descDepartamento,$fechaBaja=null,$volumenNegocio,$fechaAlta) {
        $this->codDepartamento=$codDepartamento;
        $this->descDepartamento=$descDepartamento;
        $this->fechaBaja= new DateTime($fechaBaja);
        $this->volumenNegocio=$volumenNegocio;
        $this->fechaAlta=$fechaAlta;
    }
    /**
     * Funcion que devuleve el codigo del departamento
     * @return string
     */
    public function getCodDepartamento() {
        return $this->codDepartamento;
    }
    /**
     * Funcion que devuelve la descripcion del departamento
     * @return string
     */
    public function getDescDepartamento() {
        return $this->descDepartamento;
    }
    /**
     * Funcion que devuelve la fecha de la baja logica del departamento(si la hay)
     * @return DateTime
     */
    public function getFechaBaja() {
        return $this->fechaBaja;
    }
    /**
     * Funcion que devuelve el volumen de Negocio del departamento
     * @return float
     */
    public function getVolumenNegocio() {
        return $this->volumenNegocio;
    }
    /**
     * Funcion que devuelve la fecha de la creacion del departamento o de la ultima rehabilitación
     * @return DateTime
     */
    public function getFechaAlta() {
        return $this->fechaAlta;
    }
    /**
     * Funcion que establece el nuevo codigo del departamento
     * @param string $codDepartamento
     */
    public function setCodDepartamento($codDepartamento) {
        $this->codDepartamento=$codDepartamento;
    }
    /**
     * funcion que establece la nueva descripcion del departamento
     * @param string $descDepartamento
     */
    public function setDescDepartamento($descDepartamento) {
        $this->descDepartamento=$descDepartamento;
    }
    /**
     * Funcion que establece la fecha de la ultima baja logica
     * @param DateTime $fechaBaja
     */
    public function setFechaBaja($fechaBaja) {
        $this->fechaBaja=$fechaBaja;
    }
    /**
     * Funcion que establece el volumen de negocio
     * @param float $volumenNegocio
     */
    public function setVolumenNegocio($volumenNegocio) {
        $this->volumenNegocio=$volumenNegocio;
    }
    /**
     * Funcion que establece la fecha de alta o de rehabilitacion del departamento
     * @param DateTime $fechaAlta
     */
    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta=$fechaAlta;
    }
}
?>