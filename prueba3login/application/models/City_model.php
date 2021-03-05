<?php

class City_model extends CI_Model
{

    public function getCities()
    {
        return R::findAll('city');
    }

    public function crearCity($nombre,$idCountry)
    {
        $city = R::findOne('city','nombre=?',[$nombre]);
        $ok = ($city==null && $nombre!=null);
        if ($ok) {
            $city = R::dispense('city');
            $country = R::load('country', $idCountry);
            $city->nombre = $nombre;
            $city->country = $country;
            R::store($city);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
}
?>
