<?php
class Proyecto extends CI_Controller
{
    
    public function c()
    {
        frame($this,'proyecto/c');
    }
    
    public function cPost()
    {
        $this->load->model('proyecto_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $fechaIni = isset($_POST['fecha_ini']) ? $_POST['fecha_ini'] : null;
        $fechaFin = isset($_POST['fecha_fin']) ? $_POST['fecha_fin'] : null;
        
        try {
            $this->proyecto_model->crearProyecto($nombre,$fechaIni,$fechaFin);
            redirect(base_url() . 'proyecto/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='proyecto/c';
            redirect(base_url() . 'msg');
        }
    }
    public function r()
    {
        $this->load->model('proyecto_model');
        $datos['proyectos'] = $this->proyecto_model->getProyectos();
        frame($this,'proyecto/r',$datos);
    }
    public function u()
    {
        $this->load->model('proyecto_model');
        $datos['proyectos'] = $this->proyecto_model->getProyectos();
        $this->load->model('empleado_model');
        $datos['empleados'] = $this->empleado_model->getEmpleados();
        frame($this,'proyecto/u',$datos);
    }
    
    public function uPost()
    {
        $this->load->model('proyecto_model');
        $idEmpleado = isset($_POST['idEmpleado']) ? $_POST['idEmpleado'] : null;
        $idProyecto = isset($_POST['idProyecto']) ? $_POST['idProyecto'] : null;
        
        try {
            $this->proyecto_model->asignarEmpleado($idEmpleado,$idProyecto);
            redirect(base_url() . 'proyecto/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='proyecto/u';
            redirect(base_url() . 'msg');
        }
    }
    public function rc()
    {
        $idProyecto = isset($_POST['idProyecto'])?$_POST['idProyecto']:null;
        
        $this->load->model('proyecto_model');
        $this->load->model('empleado_model');
        
        $datos['empleados'] = $this->empleado_model->getEmpleadosP($idProyecto);
        $datos['proyecto'] = $this->proyecto_model->getNameById($idProyecto)->nombre;
        
        frame($this,'proyecto/rc', $datos);
    }
}
?>
