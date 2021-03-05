<?php
class Empleado extends CI_Controller{
    
    public function d(){
        $this->load->model('empleado_model');
        $idEmpleado = $_GET['idEmpleado'];
        $this->empleado_model->d($idEmpleado);
        
        redirect(base_url().'empleado/r');
    }
    
    public function u(){
        $this->load->model('empleado_model');  //cargo el modelo 
        $idEmpleado = $_GET['idEmpleado'];  // recojo de la vista el id del empleado que quiero modificar
        $datos['empleado']=$this->empleado_model->getUsuarioById($idEmpleado);//llamo a funcion u(return R::load('empleado', $idEmpleado);)) y lo empaqueto en un array
        frame($this, 'empleado/u', $datos);// lo envio todo a la vista
    }
    
    public function uPost(){
        
        $nuevoNombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $nuevoApellidos=isset($_POST['apellidos'])?$_POST['apellidos']:null;
        $nuevoTelefono=isset($_POST['telefono'])?$_POST['telefono']:null;
        $nuevoCiudad=isset($_POST['ciudad'])?$_POST['ciudad']:null;
        $nuevoArrayLenguajes=isset($_POST['lenguajes'])?$_POST['lenguajes']:[];
        $idEmpleado = isset($_POST['idEmpleado'])?$_POST['idEmpleado']:null;
        
        $this->load->model('empleado_model');
        $this->empleado_model->u($idEmpleado,$nuevoNombre,$nuevoApellidos,$nuevoTelefono,$nuevoCiudad,$nuevoArrayLenguajes);
        
        session_start_seguro();
        $_SESSION['_msg']['texto']='Empleado modificado correctamente';
        redirect(base_url().'mensajes');
    }
}
?>