<?php 

function resaltar ($texto){
    $html = "<h1>".$texto."</h1>";
    
    return $html;
}

function pintarRadio($nombre,$arrayValueLabel){
    $html = '';
        
    foreach($arrayValueLabel as $value => $label){
        $html = $html."Aqu� va todo el c�digo html de un formulario de radios";
        $html = $html."Aqu� va todo el c�digo html de un formulario de radios";
    }
    
    return $html;
}
?>