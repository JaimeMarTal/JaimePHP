<?php
class Nota extends CI_Controller
{
    
    public function c()
    {
        $this->load->model('alumno_model');
        $this->load->model('asignatura_model');
        $data['alumnos']=$this->alumno_model->getAlumnos();
        $data['asignaturas']=$this->asignatura_model->getAsignaturas();
        frame($this,'nota/c',$data);
    }
    
    public function cPost()
    {
        $this->load->model('nota_model');
        $nota = isset($_POST['nota']) ? $_POST['nota'] : null;
        $idAlumno = isset($_POST['idAlumno']) ? $_POST['idAlumno'] : null;
        $idAsignatura = isset($_POST['idAsignatura']) ? $_POST['idAsignatura'] : null;
        
        try {
            $this->nota_model->crearNota($nota,$idAlumno,$idAsignatura);
            redirect(base_url() . 'alumno/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='alumno/c';
            redirect(base_url() . 'msg');
        }
    }
   
}
?>
