<?php
session_start();
class Empleado extends CI_Controller
{
    public function errorLogin()
    {
        frame($this,'empleado/errorLogin');
    }
    public function lPost(){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
       
        $this->load->model('empleado_model');
        $hash=$this->empleado_model->comprobarEmpleado($nombre,$apellido)->pwd;
        
        if (password_verify($pwd, $hash)) {
            
            $id=$this->empleado_model->comprobarEmpleado($nombre,$apellido)->id;
            
            $_SESSION['_actual']['nombre']=$nombre;
            $_SESSION['_actual']['apellido']=$apellido;
            $_SESSION['_actual']['id']=$id;
            
            redirect(base_url() . 'home');
        } else {
            redirect(base_url() . 'empleado/errorLogin');
        }
    }
    public function c()
    {
       
        $this->load->model('ciudad_model');
        $this->load->model('lenguaje_model');
        $datos['ciudades']=$this->ciudad_model->getCiudades();
        $datos['lenguajes']=$this->lenguaje_model->getLenguajes();
        
        frame($this,'empleado/c',$datos);
    }
    public function l()
    {
        frame($this,'empleado/login');
    }
    
    public function lout()
    {
        frame($this,'empleado/logout');
    }
    public function loutPost()
    {
        unset($_SESSION['_actual']);
        redirect(base_url() . 'home');
    }
    public function cPost()
    {
        $this->load->model('empleado_model');
       
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
        $tlf = isset($_POST['tlf']) ? $_POST['tlf'] : null;
        $pwd = isset($_POST['pwd']) ? password_hash($_POST['pwd'],PASSWORD_DEFAULT) : null;
        $idCiudad = isset($_POST['idCiudad']) ? $_POST['idCiudad'] : null;
        $idLenguaje = isset($_POST['idLenguaje']) ? $_POST['idLenguaje'] : [];
        
        try {
            $this->empleado_model->crearEmpleado($nombre,$apellido,$pwd,$tlf,$idCiudad,$idLenguaje);
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
    public function d()
    {
        $this->load->model('empleado_model');
        $datos['empleados'] = $this->empleado_model->getEmpleados();
        frame($this,'empleado/d',$datos);
    }
    
    public function dPost()
    {
        $this->load->model('empleado_model');
       
        $idEmpleado = isset($_POST['idEmpleado']) ? $_POST['idEmpleado'] : null;
        
        try {
            $this->empleado_model->deleteEmpleado($idEmpleado);
            redirect(base_url() . 'empleado/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='empleado/d';
            redirect(base_url() . 'msg');
        }
    }
    public function u1()
    {
        $this->load->model('empleado_model');
        $datos['empleados'] = $this->empleado_model->getEmpleados();
        frame($this,'empleado/u1',$datos);
    }
    public function u2()
    {
        $this->load->model('empleado_model');
        
        $idEmpleado = isset($_POST['idEmpleado']) ? $_POST['idEmpleado'] : null;
        
        $this->load->model('empleado_model');
        $this->load->model('ciudad_model');
        $this->load->model('lenguaje_model');
        $datos['empleado'] = $this->empleado_model->getEmpleadoById($idEmpleado);
        $datos['ciudades'] = $this->ciudad_model->getCiudades();
        $datos['lenguajes'] = $this->lenguaje_model->getLenguajes();
        frame($this,'empleado/u2',$datos);
    }
    public function uPost()
    {
        
        $this->load->model('empleado_model');
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
        $tlf = isset($_POST['tlf']) ? $_POST['tlf'] : null;
       
        $idCiudad = isset($_POST['idCiudad']) ? $_POST['idCiudad'] : null;
        $idLenguaje = isset($_POST['idLenguaje']) ? $_POST['idLenguaje'] : [];
        
        try {
            $this->empleado_model->modificarEmpleado($id,$nombre,$apellido,$tlf,$idCiudad,$idLenguaje);
            redirect(base_url() . 'empleado/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='empleado/u1';
            redirect(base_url() . 'msg');
        }}
}
?>