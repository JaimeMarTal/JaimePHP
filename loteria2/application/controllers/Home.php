<?php
class Home extends CI_Controller {
    public function index() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $data['login'] = isset($_SESSION['persona']);
        frame($this,'home/index',$data);
    }
}