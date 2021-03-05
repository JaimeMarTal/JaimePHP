<?php
class Empleado extends CI_Controller
{
    
    public function c()
    {
       
        $this->load->model('departamento_model');
        $datos['departamentos']=$this->departamento_model->getDepartamentos();

        frame($this,'empleado/c',$datos);
    }

    public function cPost()
    {
        $this->load->model('empleado_model');
       
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
        $idDepartamento = isset($_POST['idDepartamento']) ? $_POST['idDepartamento'] : null;
        
        try {
            $this->empleado_model->crearEmpleado($nombre,$apellido,$idDepartamento);
            redirect(base_url() . 'empleado/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='empleado/c';
            redirect(base_url() . 'msg');
        }
    }
    
    public function r()
    {
        $this->load->model('empleado_model');
        $datos['empleados'] = $this->empleado_model->getEmpleados();
        frame($this,'empleado/r', $datos);
    }
    
    public function rc()
    {
        $idEmpleado = isset($_POST['idEmpleado'])?$_POST['idEmpleado']:null;
        
        $this->load->model('proyecto_model');
        $this->load->model('empleado_model');
        
        $datos['proyectos'] = $this->proyecto_model->getProyectosEmple($idEmpleado);
        $datos['empleado'] = $this->empleado_model->getNameById($idEmpleado)->nombre."_".$this->empleado_model->getNameById($idEmpleado)->apellido;
        
        frame($this,'empleado/rc', $datos);
    }
}
?>