<?php
/**
 * Clase con los metodos relacionados con la tabla T02_Departamento y la clase Departamento
 * @author David Aparicio
 * @version 1.1.3
 * 
 */
class DepartamentoPDO {
    
/**
 * Metodo que busca todos los departamentos que contienen la descripcion buscada
 * @param type $descDepartamento descripcion a buscar en la base de datos
 * @return boolean|array En caso de que la busqueda de resultados se creará un array con los departamentos y en caso contrario devolverá false
 */
    public static function buscarDepartamentoPorDesc($descDepartamento) {
        $aDepartamentos=[];
       $query=<<< sql
                    SELECT * from T02_Departamento where T02_DescDepartamento LIKE '%{$descDepartamento}%';
                  sql;
               $resultado=DBPDO::ejecutarConsulta($query);
               $oDepartamento = $resultado->fetchObject();
            if(is_object($oDepartamento)){
               while ($oDepartamento != null) {
                   $departamento=new Departamento($oDepartamento->T02_CodDepartamento,$oDepartamento->T02_DescDepartamento,$oDepartamento->T02_FechaBaja,$oDepartamento->T02_VolumenNegocio,$oDepartamento->T02_FechaAlta);
                    array_push($aDepartamentos, $departamento);
                    $oDepartamento = $resultado->fetchObject();   
               }
               return $aDepartamentos;
            } else {
                return false;
            }
    }
    /**
     * Metodo que busca el departamento con el codigo especificado en el parametor $codDepartamento
     * @param string $codDepartamento codigo del departamento a buscar
     * @return boolean|\Departamento en caso de que la busqueda sea correcta devolverá un objeto de tipo departamento en el caso contrario devolverá false
     */
    public static function buscarDepartamentoPorCodigo($codDepartamento) {
       $query=<<< sql
                    SELECT * from T02_Departamento where T02_CodDepartamento = '{$codDepartamento}';
                  sql;
                $resultado=DBPDO::ejecutarConsulta($query);
               $oDepartamento = $resultado->fetchObject();
            if(is_object($oDepartamento)){
                   $departamento=new Departamento($oDepartamento->T02_CodDepartamento,$oDepartamento->T02_DescDepartamento,$oDepartamento->T02_FechaBaja,$oDepartamento->T02_VolumenNegocio,$oDepartamento->T02_FechaAlta);
               return $departamento;
            } else {
                return false;
            }
    }
    /**
     * Metodo que modifica en la base de datos el departamento especificado por $codDepartamento
     * @param type $codDepartamento codigo del departamento a modificar
     * @param type $volumenNegocio nuevo volumen de negocio del departamento
     * @param type $descripcion nueva descripcion del Departamento
     * @return boolean Devuelve true si el cambio se ha podido efectuar y false si el cambio no se ha podido efectuar
     */
    public static function modificarDepartamento($codDepartamento,$volumenNegocio,$descripcion) {
        $modificarDepartamento=<<< sql
                    UPDATE T02_Departamento SET T02_DescDepartamento='$descripcion',T02_VolumenNegocio='$volumenNegocio' where T02_CodDepartamento='$codDepartamento';
                sql;
        $resultado=DBPDO::ejecutarConsulta($modificarDepartamento);
        return $resultado;
    }
    /**
     * Metodo que borra el departamento especificado por $codDepartamento
     * @param string $codDepartamento es el codigo del departamento a borrar
     */
    public static function borrarDepartamento($codDepartamento) {
        $query = <<<query
                delete from T02_Departamento where T02_CodDepartamento='$codDepartamento';
                query;
        DBPDO::ejecutarConsulta($query);
    }
    /**
     * Funcion que añade un departamento a la tabla de departamentos
     * @param string $codDepartamento codigo de departamento
     * @param string $descDepartamento descripcion del departamento
     * @param float $volumenNegocio volumen de negocio
     */
    public static function addDepartamento($codDepartamento,$descDepartamento,$volumenNegocio) {
        $query=<<<sql
                    INSERT INTO T02_Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_VolumenNegocio,T02_FechaAlta) values("$codDepartamento","$descDepartamento",$volumenNegocio,now());
                sql;
        return DBPDO::ejecutarConsulta($query);
    }
}