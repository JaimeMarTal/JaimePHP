<?php
class Travel extends CI_Controller
{
    
    public function c()
    {
        $this->load->model('user_model');
        $this->load->model('city_model');
        $data['users']=$this->user_model->getUsers();
        $data['cities']=$this->city_model->getCities();
        frame($this,'travel/c',$data);
    }
    
    public function cPost()
    {
        $this->load->model('travel_model');
        $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;
        $idsCityTravel = isset($_POST['idTravel']) ? $_POST['idTravel'] : [];
        try {
            $this->travel_model->createTravel($idUser,$idsCityTravel);
            redirect(base_url() . 'user/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='travel/c';
            redirect(base_url() . 'msg');
        }
    }
   
}
?>
