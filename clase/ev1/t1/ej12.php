<?php
namespace ev1;

$cadena = 'El tonto que lo lea será tonto simpre y es tonto quien le toque por tonto';
$sustituido = str_replace('tonto','*****',$cadena);
echo $sustituido;

?>
