<?php
/**
 * Fichero almacenaje de las direcciones de los controladores y las vistas
 * @author David Aparicio
 * @version 1.1.3
 * 
 */
require_once 'core/221024ValidacionFormularios.php';
require_once 'model/DB.php';
require_once 'model/UsuarioDB.php';
require_once 'model/Usuario.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';
require_once 'model/ErrorApp.php';
require_once 'model/REST.php';
require_once 'model/Departamento.php';
require_once 'model/DepartamentoPDO.php';
define("OBLIGATORIO", 1);
$aControladores = [ //Array de controladores 
    "login" => "controller/cLogin.php",
    "inicioPublico" => "controller/cInicioPublico.php",
    "inicioPrivado" => "controller/cInicioPrivado.php",
    "registro" => "controller/cRegistro.php",
    "detalle" => "controller/cDetalle.php",
    "wip"=>"controller/cWIP.php",
    "miCuenta"=>"controller/cMiCuenta.php",
    "borrarUsuario"=>"controller/cBorrarCuenta.php",
    "error"=>"controller/cError.php",
    "rest"=>"controller/cREST.php",
    "cambiarPassword"=>"controller/cCambiarPassword.php",
    "mantenimientoDepartamentos"=>"controller/cMtoDepartamentos.php",
    "tecnologias"=>"controller/cTecnologias.php",
    "editarDepartamento"=>"controller/cEditarDepartamento.php",
    "borrarDepartamento"=>"controller/cBorrarDepartamento.php"
    ];
$aVistas=[ //array de vistas
    "login" => "view/vLogin.php",
    "inicioPublico" => "view/vInicioPublico.php",
    "inicioPrivado"=> "view/vInicioPrivado.php",
    "registro"=> "view/vRegistro.php",
    "detalle"=>"view/vDetalle.php",
    "layout"=> "view/layout.php",
    "wip"=>"view/vWIP.php",
    "miCuenta"=>"view/vMiCuenta.php",
    "borrarUsuario"=>"view/vBorrarCuenta.php",
    "error"=>"view/vError.php",
    "rest"=>"view/vREST.php",
    "cambiarPassword"=>"view/vCambiarPassword.php",
    "mantenimientoDepartamentos"=>"view/vMtoDepartamentos.php",
    "tecnologias"=>"view/vTecnologias.php",
    "editarDepartamento"=>"view/vEditarDepartamento.php",
    "borrarDepartamento"=>"view/vBorrarDepartamento.php"
];