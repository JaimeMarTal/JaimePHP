<?php
namespace ev1;

$cadena = 'El tonto que lo lea será tonto simpre y es tonto quien le toque por tonto';
$palabrasprohibidas = ['tonto','tolai','gilí','pringao'];
$sustituido = $cadena;
foreach ($palabrasprohibidas as $palabrota){
    $sustituido=str_replace($palabrota,'*****',$sustituido);
}
echo $sustituido;

?>
