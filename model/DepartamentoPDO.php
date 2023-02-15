<?php

class DepartamentoPDO {

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
    public static function buscarDepartamentoPorCodigo($codDepartamento) {
        $aDepartamentos=[];
       $query=<<< sql
                    SELECT * from T02_Departamento where T02_CodDepartamento = '{$codDepartamento}';
                  sql;
               $resultado=DBPDO::ejecutarConsulta($query);
               $oDepartamento = $resultado->fetchObject();
            if(is_object($oDepartamento)){
                   $departamento=new Departamento($oDepartamento->T02_CodDepartamento,$oDepartamento->T02_DescDepartamento,$oDepartamento->T02_FechaBaja,$oDepartamento->T02_VolumenNegocio,$oDepartamento->T02_FechaAlta);
               return $Departamento;
            } else {
                return false;
            }
    }
    public static function borrarDepartamento($codDepartamento) {
        $query = <<<query
                delete from T02_Departamento where T01_CodDepartamento='$codDepartamento';
                query;
        DBPDO::ejecutarConsulta($query);
    }
    
}
