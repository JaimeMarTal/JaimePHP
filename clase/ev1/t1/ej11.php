<?php
namespace ev1;

$cadena='Alberto:Garay:913334455//Ana:Garcia:914445566';
$personas=explode('//',$cadena);

foreach ($personas as $elemento){
    
    $datosPersona = explode(':',$elemento);
echo <<<PERSONA

    Nombre: $datosPersona[0]
    Apellido: $datosPersona[1]
    Teléfono: $datosPersona[2]
    ============ 
PERSONA;   
}

?>
