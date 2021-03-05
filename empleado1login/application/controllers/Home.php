<?php
session_start();
class Home extends CI_Controller {
 function index() {
     if(isset($_SESSION['_actual'])&&!empty($_SESSION['_actual'])){
         frame($this,'home/login');
     }
         else{
             frame($this,'home/index');
         }
       
    }
}