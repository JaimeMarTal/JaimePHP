<?php
session_start();
class Home extends CI_Controller {
 function index() {
     if(isset($_SESSION['_actual'])&&!empty($_SESSION['_actual'])){
         frame($this,'home/login');
     }
         else{
             $this->presentacion();
         }
       
    }
    public function presentacion() {
        $datos['nombre'] = isset($_GET['nombre'])?$_GET['nombre']:'Celia Armenteros ';
        frame($this,'home/presentacion',$datos);
    }
}
