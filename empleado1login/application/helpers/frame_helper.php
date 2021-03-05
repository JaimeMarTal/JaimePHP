<?php

function frame($controller,$view,$data=[]) {
    if(isset($_SESSION['_actual'])&&!empty($_SESSION['_actual'])){
        $controller->load->view('_templates/head',$data);
        $controller->load->view('_templates/header',$data);
        $controller->load->view('_templates/nav1',$data);
        $controller->load->view($view,$data);
        $controller->load->view('_templates/footer',$data);
        $controller->load->view('_templates/end');
    }
    else{
        $controller->load->view('_templates/head',$data);
        $controller->load->view('_templates/header',$data);
        $controller->load->view('_templates/nav',$data);
        $controller->load->view($view,$data);
        $controller->load->view('_templates/footer',$data);
        $controller->load->view('_templates/end');;}
 
}

?>