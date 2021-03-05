<?php

class City extends CI_Controller
{

    public function c()
    {
        $this->load->model('country_model');
        $data['countries']=$this->country_model->getCountries();
        frame($this,'city/c',$data);
    }
    public function u() {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->load->model('city_model');
        $data['nombre'] = $this->city_model->getCityNombreById($id);
        $data['id']=$id;
        frame($this,'city/u',$data);
    }
    
    public function uPost() {
        $id = isset($_POST['id'])?$_POST['id']:null;
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('city_model');
        $this->country_model->update($id,$nombre);
        redirect(base_url().'city/r');
    }
    public function dPost() {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('city_model');
        $this->city_model->borrarCity($id);
        redirect(base_url().'city/r');
    }
    public function cPost()
    {
        $this->load->model('city_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $idCountry = isset($_POST['idCountry']) ? $_POST['idCountry'] : null;
        try {
            $this->city_model->crearCity($nombre,$idCountry);
            redirect(base_url() . 'city/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='city/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('city_model');
        $datos['cities'] = $this->city_model->getCities();
        frame($this,'city/r', $datos);
    }
}
?>