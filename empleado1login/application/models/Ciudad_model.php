<?php

class Ciudad_model extends CI_Model
{

    public function getCiudades()
    {
        return R::findAll('ciudad');
    }
    
    public function getNameById($id)
    {
        return R::load('ciudad',$id)->nombre;
    }
   
    public function crearCiudad($nombre)
    {
        $ciudad = R::findOne('ciudad','nombre=?',[$nombre]);
        $ok = ($ciudad==null && $nombre!=null);
        if ($ok) {
            $ciudad = R::dispense('ciudad');
           
            $ciudad->nombre = $nombre;
           
            R::store($ciudad);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
    
    public function deleteCiudad($idCiudad,$nombre)
    {
        $ciudad = R::load('ciudad',$idCiudad);
        $ok = ($ciudad!=null);
        if ($ok) {
            $ciudad->xownEmpleadoList = [];
            R::trash($ciudad);
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
    public function updateCiudad($idCiudad,$nombre)
    {
        $ciudad = R::load('ciudad',$idCiudad);
        $ok = ($ciudad!=null);
        if ($ok) {
            $ciudad->nombre = $nombre;
            R::store($ciudad);
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
}
?>
