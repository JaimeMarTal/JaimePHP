<?php

class Proyecto_model extends CI_Model
{
    public function getNameById($id)
    {
        return R::load('proyecto', $id);
    }
    public function getProyectos()
    {
        return R::findAll('proyecto');
    } 
    
    public function getProyectosEmple($idEmpleado)
    {
        $proyectosEmple=R::findAll('empleadoproyecto','empleado_id=?',[$idEmpleado]);
        $proyectos=[];
        foreach ($proyectosEmple as $proyecto){
            $proyectoEmple = R::load('proyecto',$proyecto->proyecto_id);
            $proyectos[]= $proyectoEmple;
        }
        return $proyectos;
    } 
    
  public function crearProyecto($nombre,$fechaIni,$fechaFin)
    {
  
        $ok = ($nombre!=null);
       
        if ($ok) {
               
                $proyecto = R::dispense('proyecto');
                $proyecto->nombre=$nombre;
                $proyecto->fecha_ini=$fechaIni;
                $proyecto->fecha_fin=$fechaFin;
                R::store($proyecto);
                
            
        } else {
            $e = ($nombre == null ? new Exception("nulo") : new Exception("error"));
            throw $e;
        }
    }
    
    public function asignarEmpleado($idEmpleado,$idProyecto)
    {
        $proyecto = R::load('proyecto',$idProyecto);
        $empleado = R::load('empleado',$idEmpleado);
        $empleado_proyecto = R::findOne('empleadoproyecto','proyecto_id=? and empleado_id=?',[$idProyecto,$idEmpleado]);
        $ok = ($proyecto!=null&&$empleado!=null&&$empleado_proyecto==null);
        
        if ($ok) {
            
            $empleado_proyecto = R::dispense('empleadoproyecto');
            $empleado_proyecto->proyecto=$proyecto;
            $empleado_proyecto->empleado=$empleado;
            R::store($empleado_proyecto);
            
            
        } else {
            $e = ($proyecto == null||$empleado == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
    }

}
    
?>

