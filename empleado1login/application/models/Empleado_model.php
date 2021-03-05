<?php

class Empleado_model extends CI_Model
{

    public function getEmpleadoById($id)
    {
        return R::load('empleado', $id);
    }
    
    public function getNameById($idEmpleado)
    {
        return R::load('empleado',$idEmpleado);
    }

    public function getEmpleados()
    {
        return R::findAll('empleado');
    }
    public function getEmpleadosDept($idDepartamento)
    {
        return R::findAll('empleado','departamento_id=?',[$idDepartamento]);
    }
    public function getEmpleadosP($idProyecto)
    {
        $empleadoProyecto=R::findAll('empleadoproyecto','proyecto_id=?',[$idProyecto]);
        $empleados=[];
        foreach ($empleadoProyecto as $empleado){
            $empleadoProyecto = R::load('empleado',$empleado->empleado_id);
            $empleados[]= $empleadoProyecto;
        }
        return $empleados;
    } 
    public function crearEmpleado($nombre,$apellido,$pwd,$tlf,$idCiudad,$idLenguaje)
    {
        $ciudad = R::load('ciudad',$idCiudad);
        $empleado = R::findOne('empleado','nombre=? and apellido=?',[$nombre,$apellido]);
    
        $ok = ($empleado==null&&$nombre != null && $apellido != null&& $ciudad != null&& $pwd != null&& $tlf != null);
        if ($ok) {
            $empleado = R::dispense('empleado');
            $empleado->nombre = $nombre;
            $empleado->apellido = $apellido;
            $empleado->pwd = $pwd;
            $empleado->telefono = $tlf;
       
            $empleado->ciudad = $ciudad;
            R::store($empleado);
            $ciudad->xownEmpleadoList[] = $empleado;
            R::store($ciudad);
            foreach ($idLenguaje as $lenguaje){
                $lenguajeEmple = R::load('lenguaje',$lenguaje);
                
                $conoce = R::dispense('conoce');
                $conoce->empleado=$empleado;
                $conoce->lenguaje= $lenguajeEmple;
            
                R::store($conoce);
            }
                   } else {
                       $e = ($nombre == null||$apellido == null ? new Exception("Introduzca datos") : new Exception("Alumno duplicado"));
            throw $e;
        }
    }
    public function comprobarEmpleado($nombre,$apellido)
    {
        $empleado=R::findOne('empleado','nombre=? AND apellido=?',[$nombre,$apellido]);
        return $empleado;
    }
    
    public function deleteEmpleado($idEmpleado)
    {
        $empleado = R::load('empleado',$idEmpleado);
        $ok = ($empleado!=null);
        if ($ok) {
            R::trash($empleado);
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
    public function modificarEmpleado($id,$nombre,$apellido,$tlf,$idCiudad,$idLenguaje)
    {
        $ciudad = R::load('ciudad',$idCiudad);
        $empleado = R::load('empleado',$id);
        
        $ok = ($empleado!=null&&$nombre != null && $apellido != null&& $ciudad != null&& $tlf != null);
        if ($ok) {
            $empleado->nombre = $nombre;
            $empleado->apellido = $apellido;
            $empleado->telefono = $tlf;
            
            $empleado->ciudad = $ciudad;
            R::store($empleado);
    $comunes = [];
            foreach ($empleado->ownConoceList as $conoce) {
                if (! in_array($conoce->lenguaje_id, $idLenguaje)) {
                    R::store($empleado);
                    R::trash($conoce);
                } else {
                    $comunes[] = $conoce->lenguaje_id;
                }
            }
            
            foreach (array_diff($idLenguaje, $comunes) as $idLeng) {
                $lenguaje = R::load('lenguaje', $idLeng);
                $conoce = R::dispense('conoce');
                $conoce->empleado = $empleado;
                $conoce->lenguaje = $lenguaje;
                R::store($empleado);
                R::store($conoce);
            }
            
        } else {
            $e = ($nombre == null||$apellido == null ? new Exception("Introduzca datos") : new Exception("Alumno duplicado"));
            throw $e;
        }
    }
}

?>
