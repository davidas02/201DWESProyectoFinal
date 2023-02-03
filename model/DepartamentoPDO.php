<?php

class DepartamentoPDO {

    public static function buscarDepartamentoPorDesc($descDepartamento) {
        $aDepartamentos=[];
       $query=<<< sql
                    SELECT * from T02_Departamento where T02_descDepartamento LIKE '%{$descDepartamento}%';
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
}