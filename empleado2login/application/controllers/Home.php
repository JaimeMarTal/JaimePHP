<?php
class Home extends CI_Controller{
    public function index(){
        frame($this, 'index');
    }
    
    public function registrar(){
        frame($this, 'home/registrar');
    }
    
    public function registrarPost(){
        $usuario=isset($_POST['usuario'])?$_POST['usuario']:null;
        $pwd=isset($_POST['pwd'])?$_POST['pwd']:null;
        $this->load->model('home_model');
        
        
        try {
            $this->home_model->crearUsuario($usuario, $pwd);
            session_start_seguro();
            $_SESSION['_msg']['texto']='Usuario creado correctamente';
            $_SESSION['_msg']['uri']='';
            redirect(base_url() . 'mensajes');
        }
        catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='home/registrar';
            redirect(base_url() . 'mensajes');
        }
    }
    
    public function login(){
        frame($this, 'home/login');
    }
    
    public function loginPost(){
        $usuario=isset($_POST['usuario'])?$_POST['usuario']:null;
        $pwd=isset($_POST['pwd'])?$_POST['pwd']:null;
        $this->load->model('home_model');
        
        if($this->home_model->comprobarUsuario($usuario, $pwd)){
            session_start_seguro();
            $_SESSION['usuario']=$usuario;
            redirect(base_url() . '');
        } else {
            //mal
            session_start_seguro();
            $_SESSION['_msg']['texto']='Credenciales no válidos';
            $_SESSION['_msg']['uri']='home/login';
            redirect(base_url() . 'mensajes');
        }
        
    }
    
    public function logout(){
        session_start_seguro();
        session_destroy();
        redirect(base_url() . '');
    }
    
    public function prueba(){
        $this->load->view('prueba');
    }
}
?>