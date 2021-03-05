<?php

class Departamento extends CI_Controller
{

    public function c()
    {
        frame($this,'departamento/c');
    }
  
    public function cPost()
    {
        $this->load->model('departamento_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
           try {
               $this->departamento_model->crearDepartamento($nombre);
            redirect(base_url() . 'departamento/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='departamento/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('departamento_model');
        $datos['departamentos'] = $this->departamento_model->getDepartamentos();
        frame($this,'departamento/r', $datos);
    }
    
    public function rc()
    {
        $idDepartamento = isset($_POST['idDepartamento'])?$_POST['idDepartamento']:null;
        
        $this->load->model('empleado_model');
        $this->load->model('departamento_model');
       
        $datos['empleados'] = $this->empleado_model->getEmpleadosDept($idDepartamento);
        $datos['departamento'] = $this->departamento_model->getNameById($idDepartamento);
        
        frame($this,'departamento/rc', $datos);
    }
}
?>