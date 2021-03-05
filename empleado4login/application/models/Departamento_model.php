<?php

class Departamento_model extends CI_Model
{

    public function getDepartamentos()
    {
        return R::findAll('departamento');
    }
    
    public function getNameById($idDepartamento)
    {
        return R::load('departamento',$idDepartamento)->nombre;
    }
   
    public function crearDepartamento($nombre)
    {
        $departamento = R::findOne('departamento','nombre=?',[$nombre]);
        $ok = ($departamento==null && $nombre!=null);
        if ($ok) {
            $departamento = R::dispense('departamento');
           
            $departamento->nombre = $nombre;
           
            R::store($departamento);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
}
?>
