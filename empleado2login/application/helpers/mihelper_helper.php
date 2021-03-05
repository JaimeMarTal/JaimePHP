<?php
function session_start_seguro() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
}

function updateONEManyToMany($typeBeanOne, $beanOne, $typeBeanMany, $typeBeanRelation, $arrayIDsTypeMany){
    $comunes = [];
    foreach ($beanOne->ownTravelledList as $travel) {
        
        if (! in_array($travel->city_id, $arrayIDsTypeMany)) {
            R::store($beanOne);
            R::trash($travel);
        } else {
            $comunes[] = $travel->city_id;
        }
    }
    
    foreach (array_diff($arrayIDsTypeMany, $comunes) as $idTravelNew) {
        
        $city = R::load('city', $idTravelNew);
        
        $travel = R::dispense('travelled');
        $travel->user = $beanOne;
        $travel->city = $city;
        
        R::store($beanOne);
        R::store($travel);
    }
}
?>