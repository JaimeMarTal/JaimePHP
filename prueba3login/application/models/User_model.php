<?php

class User_model extends CI_Model
{

    public function getUserById($id)
    {
        return R::load('user', $id);
    }

    public function getUsers()
    {
        return R::findAll('user');
    }

    public function crearUser($dni,$nombre,$idCityBorn,$idsCityTravel)
    {
        $user = R::findOne('user','dni=?',[$dni]);
    
        $ok = ($user==null&&$dni != null && $nombre != null && $idCityBorn != null);
        if ($ok) {
            $user = R::dispense('user');
            $user->dni = $dni;
            $user->nombre = $nombre;
            $cityBorn = R::load('city', $idCityBorn);
            $user->born = $cityBorn;
            R::store($user);
            
            foreach ($idsCityTravel as $idcityTravel){
                $cityTravel = R::load('city',$idcityTravel);
                $c_g = R::dispense('travel');
                $c_g->user=$user;
                $c_g->city= $cityTravel;
                R::store($c_g);
            }
            R::store($user);

        } else {
            $e = ($nombre == null ? new Exception("empty") : new Exception("duplicated"));
            throw $e;
        }
    }

}

?>
