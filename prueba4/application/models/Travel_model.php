<?php

class Travel_model extends CI_Model
{
  public function createTravel($idUser,$idsCityTravel)
    {
        $user = R::load('user',$idUser);
        
        $ok = ($user!=null&&!empty($idsCityTravel));
        if ($ok) {
            foreach ($idsCityTravel as $idCityTravel){               
                $cityTravel = R::load('city',$idCityTravel);
                $travel = R::findOne('travel','user_id=? and city_id=?',[$idUser,$idCityTravel]);
                if ($travel==null) {
                $c_g = R::dispense('travel');
                $c_g->user=$user;
                $c_g->city= $cityTravel;
                R::store($c_g);
                }}
            
        } else {
            $e = ($user == null ? new Exception("nulo") : new Exception("error"));
            throw $e;
        }
    }}
    
?>

