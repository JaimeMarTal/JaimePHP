<?php
class Participacion extends CI_Controller {
    public function intercambiar() {
        
        session_start();
        $persona = isset($_SESSION['persona'])?$_SESSION['persona']:null;
        
        $this->load->model('boleto_model');
        $data['boletosAjenos'] = $this->boleto_model->getBoletosAjenos($persona);
        $data['persona'] = $persona;
        frame($this,'participacion/intercambiar',$data);
    }
}