<?php namespace rpj\dao;
use rpj\Model\Usuario;
class UsuariosDAO{
    public function getUsuarios(){
        $admin = new Usuario(1, 'Jorge', 'jorge@hotmail.com','12345678');
        $usuarios = $admin;
        return $usuarios;
    }
    public function buscarUsuario($email, $senha){
        $usuarios = $this->getUsuarios();
        foreach($usuarios as $usuario){
            if(($usuario->email == $email) && ($usuario->senha == $senha)){ //n tem bcrypt pq o banco convenhamos ne, n existe
                return true;
            }
            else return false;
        }
    }
}