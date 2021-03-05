<?php
class Boleto_model extends CI_Model {
    public function getBoletosAjenos($persona) {
        return R::findAll('boleto','persona_id<>?',[$persona->id]);
    }
    public function add($numero,$euros,$id_persona) {
        $persona = R::load('persona',$id_persona);
        $boleto = R::dispense('boleto');
        $boleto->numero = $numero;
        $boleto->multiplicador = 0;
        $boleto->persona = $persona;
        R::store($boleto);
        
        $participacion = R::dispense('participacion');
        $participacion->euros = $euros;
        $participacion->boleto = $boleto;
        $participacion->persona = $persona;
        R::store($participacion);
    }
}
?>