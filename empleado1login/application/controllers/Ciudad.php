<?php
session_start();
class Ciudad extends CI_Controller
{

    public function c()
    {
        frame($this,'ciudad/c');
    }
  
    public function cPost()
    {
        $this->load->model('ciudad_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
           try {
               $this->ciudad_model->crearCiudad($nombre);
            redirect(base_url() . 'ciudad/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='ciudad/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('ciudad_model');
        $datos['ciudades'] = $this->ciudad_model->getCiudades();
        frame($this,'ciudad/r', $datos);
    }
    public function d()
    {
        $this->load->model('ciudad_model');
        $datos['ciudades'] = $this->ciudad_model->getCiudades();
        frame($this,'ciudad/d',$datos);
    }
    
    public function dPost()
    {
        $this->load->model('ciudad_model');
        $idCiudad = isset($_POST['idCiudad']) ? $_POST['idCiudad'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try {
            $this->ciudad_model->deleteCiudad($idCiudad,$nombre);
            redirect(base_url() . 'ciudad/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='ciudad/d';
            redirect(base_url() . 'msg');
        }
    }
    public function u()
    {
        $this->load->model('ciudad_model');
        $datos['ciudades'] = $this->ciudad_model->getCiudades();
        frame($this,'ciudad/u',$datos);
    }
    
    public function uPost()
    {
        $this->load->model('ciudad_model');
        $idCiudad = isset($_POST['idCiudad']) ? $_POST['idCiudad'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try {
            $this->ciudad_model->updateCiudad($idCiudad,$nombre);
            redirect(base_url() . 'ciudad/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='ciudad/u';
            redirect(base_url() . 'msg');
        }
    }
}
?>