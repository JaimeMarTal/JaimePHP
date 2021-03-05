<?php
class Home_model extends CI_Model{
    public function crearUsuario($nombre, $pwd){
        
        $usuario = R::findOne('usuario', 'nombre=?', [$nombre]);
        $noExiste = ($usuario == null);
        
        if($noExiste && $nombre != null && $pwd != null ){
            
            $usuario = R::dispense('usuario');
            $usuario->nombre=$nombre;
            $usuario->pwd=password_hash($pwd, PASSWORD_DEFAULT);
            R::store($usuario);
        }
        
        if(!$noExiste){
            throw new Exception('EL USUARIO YA EXISTE');
        } else if($usuario == null){
            throw new Exception('EL NOMBRE DEL USUARIO NO PUEDE ESTAR VACÍO');
        } else if($pwd == null){
            throw new Exception('LA CONTRASEÑA DEL USUARIO NO PUEDE ESTAR VACÍA');
        }
    }
    
    public function comprobarUsuario($nombre, $pwd){
        
        $credencialesOK = false;
        
        $usuario = R::findOne('usuario', 'nombre=?', [$nombre]);
        
        if($usuario != null){
            if (password_verify($pwd, $usuario->pwd)) {
                $credencialesOK = true;
            }
        }
        
        return $credencialesOK;
    }
    
    public function devolverUsuario($nombre){
        return  R::findOne('usuario', 'nombre=?', [$nombre]);
    }
    
    public function getUsuarioById($id){
        return R::load('usuario', $id);
    }
    
    public function getUsuarios(){
        return  R::findAll('usuario');
    }
}
?>