<?php
namespace ev1;

$bd = [];
$departamento=[];
$empleado=[];

function menu (){
    $opcion = 1;
    
    
        echo <<<MENU
        
Escoge una opción:

DEPARTAMENTO
1.- Crear
2.- Modificar
3.- Borrar
4.- Recuperar todos
5.- Recuperar por Id

EMPLEADO
6.- Crear
7.- Modificar
8.- Borrar
9.- Recuperar todos
10.- Recuperar por Id

0.- SALIR

MENU;
        
    echo 'Opción: ';
    fscanf(STDIN,"%d/n", $opcion);
    return $opcion;
}

function crearDepar (){
    
}

while ($opcion!=0){
    switch (menu()){
        case 0:
            break;
        case 1:
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            break;
        case 7:
            break;
        case 8:
            break;
        case 9:
            break;
        case 10:
            break;
    }
    
}



?>