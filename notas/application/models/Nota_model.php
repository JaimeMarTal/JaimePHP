<?php

class Nota_model extends CI_Model
{
    
    public function getNotasAs($id)
    {
        return R::findAll('nota','asignatura_id=?',[$id]);
    } 
    
    public function getNotasAl($id)
    {
        return R::findAll('nota','alumno_id=?',[$id]);
    } 
    
  public function crearNota($nota,$idAlumno,$idAsignatura)
    {
        $alumno = R::load('alumno',$idAlumno);
        $asignatura = R::load('asignatura',$idAsignatura);
        
        $ok = ($alumno!=null&&$asignatura!=null);
       
        if ($ok) {
               
                $n = R::dispense('nota');
                $n->nota=$nota;
                $n->alumno=$alumno;
                $n->asignatura=$asignatura;
                R::store($n);
                
            
        } else {
            $e = ($alumno == null||$asignatura == null ? new Exception("nulo") : new Exception("error"));
            throw $e;
        }
    }}
    
?>

