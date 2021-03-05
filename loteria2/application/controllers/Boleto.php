<?php
class Boleto extends CI_Controller {
    public function add() {
        session_start();
        if (!isset($_SESSION['persona'])) {
            show_404();
        }
        frame($this,'boleto/add');
    }
    
    public function addPost() {
        session_start();
        if (!isset($_SESSION['persona'])) {
            show_404();
        }
        $numero = $_POST['numero'];
        $euros= $_POST['euros'];
        $persona = $_SESSION['persona'];
        
        $this->load->model('boleto_model');
        $this->boleto_model->add($numero,$euros,$persona->id);
        
        $_SESSION['_msg']['texto']='Decimo registrado con éxito';
        $_SESSION['_msg']['uri']='';
        redirect(base_url() . 'msg');
    }
}
?>