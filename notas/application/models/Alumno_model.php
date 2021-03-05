<?php

class Alumno_model extends CI_Model
{

    public function getAlumnoById($id)
    {
        return R::load('alumno', $id);
    }
    
    public function getNameById($idAlumno)
    {
        return R::load('alumno',$idAlumno);
    }

    public function getAlumnos()
    {
        return R::findAll('alumno');
    }

    public function crearAlumno($nombre,$apellido)
    {
        $alumno = R::findOne('user','nombre=? and apellido=?',[$nombre,$apellido]);
    
        $ok = ($alumno==null&&$nombre != null && $apellido != null);
        if ($ok) {
            $user = R::dispense('alumno');
            $user->nombre = $nombre;
            $user->apellido = $apellido;
            R::store($user);
                   } else {
                       $e = ($nombre == null||$apellido == null ? new Exception("Introduzca datos") : new Exception("Alumno duplicado"));
            throw $e;
        }
    }

}

?>
