<?php

class Lenguaje_model extends CI_Model
{

    public function getLenguajes()
    {
        return R::findAll('lenguaje');
    }
    
    public function getNameById($id)
    {
        return R::load('lenguaje',$id)->nombre;
    }
   
    public function crearLenguaje($nombre)
    {
        $lenguaje = R::findOne('lenguaje','nombre=?',[$nombre]);
        $ok = ($lenguaje==null && $nombre!=null);
        if ($ok) {
            $lenguaje = R::dispense('lenguaje');
           
            $lenguaje->nombre = $nombre;
           
            R::store($lenguaje);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
    public function deleteLenguaje($idLenguaje,$nombre)
    {
        $lenguaje = R::load('lenguaje',$idLenguaje);
        $ok = ($lenguaje!=null);
        if ($ok) {
           
            R::trash($lenguaje);
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
    public function updateLenguaje($idLenguaje,$nombre)
    {
        $lenguaje = R::load('lenguaje',$idLenguaje);
        $ok = ($lenguaje!=null);
        if ($ok) {
            $lenguaje->nombre = $nombre;
            R::store($lenguaje);
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
}
?>
