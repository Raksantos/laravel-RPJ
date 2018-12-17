<?php namespace rpj\Model;

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;
    //construtor da classe
    function __construct($i, $n, $e, $s){
        $this->id = $i;
        $this->nome = $n;
        $this->email = $e;
        $this->senha = $s;
    }
 
} ?>