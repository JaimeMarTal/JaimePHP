<?php
class Empleado_model extends CI_Model{
    public function c($nombre,$apellidos,$telefono,$ciudad,$arrayLenguajes){
        $empleado=R::dispense('empleado');
        $empleado->nombre=$nombre;
        $empleado->apellidos=$apellidos;
        $empleado->telefono=$telefono;
        R::store($empleado);
        
        $beanCiudad=R::findOne('ciudad', 'nombre=?', [$ciudad]);
        if($beanCiudad==null){
            $beanCiudad=R::dispense('ciudad');
            $beanCiudad->nombre=$ciudad;
            
        }
        
        $beanCiudad->xownEmpleadoList[]=$empleado;
        R::store($beanCiudad);
        
        foreach ($arrayLenguajes as $nombreLenguaje){
            
            $beanLenguaje=R::findOne('lenguaje', 'nombre=?', [$nombreLenguaje]);
            if($beanLenguaje==null){
                $beanLenguaje=R::dispense('lenguaje');
                $beanLenguaje->nombre=$nombreLenguaje;
                
            }
            
            R::store($beanLenguaje);
            
            $sabe=R::dispense('sabe');
            $sabe->empleado=$empleado;
            $sabe->lenguaje=$beanLenguaje;
            R::store($sabe);
        }
       
    }

    public function r(){
        return R::findAll('empleado');
    }
    
    public function rAnonimo(){
        return R::findAll('empleado');
    }
    
    public function d($idEmpleado){
        $empleado=R::load('empleado', $idEmpleado);
        R::trash($empleado);
    }
    
    public function getUsuarioById($idEmpleado){
        return R::load('empleado', $idEmpleado);
    }
    
    public function u($idEmpleado,$nuevoNombre,$nuevoApellidos,$nuevoTelefono,$nuevoCiudad,$nuevoArrayLenguajes){
        $empleado=R::load('empleado', $idEmpleado);
       
        $empleado->nombre=$nuevoNombre;
        $empleado->apellidos=$nuevoApellidos;
        $empleado->telefono=$nuevoTelefono;
        R::store($empleado);
        
        $beanCiudad=R::findOne('ciudad', 'nombre=?', [$nuevoCiudad]);
        if($beanCiudad==null){
            $beanCiudad=R::dispense('ciudad');
            $beanCiudad->nombre=$nuevoCiudad;
            
        }
        
        $beanCiudad->xownEmpleadoList[]=$empleado;
        R::store($beanCiudad);
        
        //borrar las filas
        $filas = R::findAll('sabe', "WHERE empleado_id=$idEmpleado");
        
        foreach($filas as $fila){
            R::trash($fila);
        }
        
        foreach ($nuevoArrayLenguajes as $nombreLenguaje){
            
            $beanLenguaje=R::findOne('lenguaje', 'nombre=?', [$nombreLenguaje]);
            if($beanLenguaje==null){
                $beanLenguaje=R::dispense('lenguaje');
                $beanLenguaje->nombre=$nombreLenguaje;
                
            }
            
            R::store($beanLenguaje);
            
            $sabe=R::dispense('sabe');
            $sabe->empleado=$empleado;
            $sabe->lenguaje=$beanLenguaje;
            R::store($sabe);
        }
        
    }
    
}
?>