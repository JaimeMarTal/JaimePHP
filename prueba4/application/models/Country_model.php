<?php

class Country_model extends CI_Model
{

    public function getCountries()
    {
        return R::findAll('country');
    }

    public function crearCountry($nombre)
    {
        $country = R::findOne('country','nombre=?',[$nombre]);
        $ok = ($country==null && $nombre!=null);
        if ($ok) {
            $country = R::dispense('country');
            $country->nombre = $nombre;
            R::store($country);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
}
?>
