<?php
class User extends CI_Controller
{
    
    public function c()
    {
        $this->load->model('city_model');
        $data['cities']=$this->city_model->getCities();
        frame($this,'user/c',$data);
    }

    public function cPost()
    {
        $this->load->model('user_model');
        $dni = isset($_POST['dni']) ? $_POST['dni'] : null;
        $nombre = isset($_POST['name']) ? $_POST['name'] : null;
        $idCityBorn = isset($_POST['idCity']) ? $_POST['idCity'] : null;
        $idsCityTravel = isset($_POST['idTravel']) ? $_POST['idTravel'] : [];
        try {
            $this->user_model->crearUser($dni,$nombre,$idCityBorn,$idsCityTravel);
            redirect(base_url() . 'user/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='user/c';
            redirect(base_url() . 'msg');
        }
    }
    
    public function r()
    {
        $this->load->model('user_model');
        $datos['users'] = $this->user_model->getUsers();
        frame($this,'user/r', $datos);
    }
    
    
    
    
    
    
    
    
}
?>