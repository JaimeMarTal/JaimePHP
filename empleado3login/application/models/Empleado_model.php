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
    public function crearEmpleado($nombre,$apellido,$idDepartamento)
    {
        $departamento = R::load('departamento',$idDepartamento);
        $empleado = R::findOne('user','nombre=? and apellido=?',[$nombre,$apellido]);
    
        $ok = ($empleado==null&&$nombre != null && $apellido != null&& $departamento != null);
        if ($ok) {
            $empleado = R::dispense('empleado');
            $empleado->nombre = $nombre;
            $empleado->apellido = $apellido;
            $empleado->departamento = $departamento;
            R::store($empleado);
                   } else {
                       $e = ($nombre == null||$apellido == null ? new Exception("Introduzca datos") : new Exception("Alumno duplicado"));
            throw $e;
        }
    }

}

?>
