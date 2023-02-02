<?php

class DepartamentoPDO {

    public static function buscarDepartamentoPorDescripcion($descDepartamento) {
        $aDepartamentos=[];
       $query=<<< sql
                    SELECT * from T02_Departamento where T02_descDepartamento LIKE '%{$descDepartamento}%';
                  sql;
               $resultado=DBPDO::ejecutarConsulta($query);
               $oDepartamento = $resultado->fetchObject();
            if(is_object($oDepartamento)){
               while ($oDepartamento != null) {
                    array_push($aDepartamentos, new Departamento($oDepartamento->T02_CodDepartamento,$oDepartamento->T02_DescDepartamento,$oDepartamento->T02_FechaBaja,$oDepartamento->T02_VolumenNegocio,$oDepartamento->T02_FechaAlta));
                    $oDepartamento = $resultado->fetchObject();   
               }
               return $aDepartamentos;
            } else {
                return false;
            }
    }
}