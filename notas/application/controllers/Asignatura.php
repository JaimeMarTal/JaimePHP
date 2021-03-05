<?php

class Asignatura extends CI_Controller
{

    public function c()
    {
        frame($this,'asignatura/c');
    }
  
    public function cPost()
    {
        $this->load->model('asignatura_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
           try {
               $this->asignatura_model->crearAsignatura($nombre);
            redirect(base_url() . 'asignatura/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='asignatura/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('asignatura_model');
        $datos['asignaturas'] = $this->asignatura_model->getAsignaturas();
        frame($this,'asignatura/r', $datos);
    }
    
    public function rc()
    {
        $idAsignatura = isset($_POST['idAs'])?$_POST['idAs']:null;
        
        $this->load->model('nota_model');
        $this->load->model('asignatura_model');
       
        $datos['notas'] = $this->nota_model->getNotasAs($idAsignatura);
        $datos['asignatura'] = $this->asignatura_model->getNameById($idAsignatura);
        
        frame($this,'asignatura/rc', $datos);
    }
}
?>