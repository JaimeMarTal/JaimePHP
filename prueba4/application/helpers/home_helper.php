<?php
function home($controller,$view,$data=[]) {
    $controller->load->view('_templates/head',$data);
    $controller->load->view('_templates/header',$data);
    $controller->load->view('_templates/navHome',$data);
    $controller->load->view($view,$data);
    $controller->load->view('_templates/footer',$data);
    $controller->load->view('_templates/end');
}
?>
