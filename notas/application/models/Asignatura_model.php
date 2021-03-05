<?php

class Asignatura_model extends CI_Model
{

    public function getAsignaturas()
    {
        return R::findAll('asignatura');
    }
    
    public function getNameById($idAsignatura)
    {
        return R::load('asignatura',$idAsignatura)->nombre;
    }
   
    public function crearAsignatura($nombre)
    {
        $asignatura = R::findOne('asignatura','nombre=?',[$nombre]);
        $ok = ($asignatura==null && $nombre!=null);
        if ($ok) {
            $asignatura = R::dispense('asignatura');
           
            $asignatura->nombre = $nombre;
           
            R::store($asignatura);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
}
?>
