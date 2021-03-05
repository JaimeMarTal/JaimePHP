<?php
class Alumno extends CI_Controller
{
    
    public function c()
    {
        frame($this,'alumno/c');
    }

    public function cPost()
    {
        $this->load->model('alumno_model');
       
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
        
        try {
            $this->alumno_model->crearAlumno($nombre,$apellido);
            redirect(base_url() . 'alumno/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='alumno/c';
            redirect(base_url() . 'msg');
        }
    }
    
    public function r()
    {
        $this->load->model('alumno_model');
        $datos['alumnos'] = $this->alumno_model->getAlumnos();
        frame($this,'alumno/r', $datos);
    }
    
    public function rc()
    {
        $idAlumno = isset($_POST['idAlumno'])?$_POST['idAlumno']:null;
        
        $this->load->model('nota_model');
        $this->load->model('alumno_model');
        
        $datos['notas'] = $this->nota_model->getNotasAl($idAlumno);
        $datos['alumno'] = $this->alumno_model->getNameById($idAlumno)->nombre."_".$this->alumno_model->getNameById($idAlumno)->apellido;
        
        frame($this,'alumno/rc', $datos);
    }
}
?>