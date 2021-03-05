<?php
session_start();
class Lenguaje extends CI_Controller
{

    public function c()
    {
        frame($this,'lenguaje/c');
    }
  
    public function cPost()
    {
        $this->load->model('lenguaje_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
           try {
               $this->lenguaje_model->crearLenguaje($nombre);
            redirect(base_url() . 'lenguaje/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='lenguaje/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('lenguaje_model');
        $datos['lenguajes'] = $this->lenguaje_model->getLenguajes();
        frame($this,'lenguaje/r', $datos);
    }
    public function d()
    {
        $this->load->model('lenguaje_model');
        $datos['lenguajes'] = $this->lenguaje_model->getLenguajes();
        frame($this,'lenguaje/d',$datos);
    }
    
    public function dPost()
    {
        $this->load->model('lenguaje_model');
        $idLenguaje = isset($_POST['idLenguaje']) ? $_POST['idLenguaje'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try {
            $this->lenguaje_model->deleteLenguaje($idLenguaje,$nombre);
            redirect(base_url() . 'lenguaje/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='lenguaje/d';
            redirect(base_url() . 'msg');
        }
    }
    public function u()
    {
        $this->load->model('lenguaje_model');
        $datos['lenguajes'] = $this->lenguaje_model->getLenguajes();
        frame($this,'lenguaje/u',$datos);
    }
    
    public function uPost()
    {
        $this->load->model('lenguaje_model');
        $idLenguaje = isset($_POST['idLenguaje']) ? $_POST['idLenguaje'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try {
            $this->lenguaje_model->updateLenguaje($idLenguaje,$nombre);
            redirect(base_url() . 'lenguaje/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='lenguaje/u';
            redirect(base_url() . 'msg');
        }
    }
   
}
?>