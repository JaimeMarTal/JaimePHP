<?php

class Country extends CI_Controller
{

    public function c()
    {
        frame($this,'country/c');
    }
    public function u() {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->load->model('country_model');
        $data['nombre'] = $this->country_model->getCountryNombreById($id);
        $data['id']=$id;
        frame($this,'country/u',$data);
    }
    
    public function uPost() {
        $id = isset($_POST['id'])?$_POST['id']:null;
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('country_model');
        $this->country_model->update($id,$nombre);
        redirect(base_url().'country/r');
    }
    public function dPost() {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('country_model');
        $this->country_model->borrarCountry($id);
        redirect(base_url().'country/r');
    }
    public function cPost()
    {
        $this->load->model('country_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        try {
            $this->country_model->crearCountry($nombre);
            redirect(base_url() . 'country/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='country/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('country_model');
        $datos['countries'] = $this->country_model->getCountries();
        frame($this,'country/r', $datos);
    }
}
?>