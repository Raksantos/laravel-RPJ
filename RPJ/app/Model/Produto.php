<?php namespace rpj\Model;

class Produto{
    public $nome;
    public $preco;
    public $marca;
    public $categoria;
    public $imagem;

    //construtor da classe
    function __construct($n, $p, $m, $c, $i){
        $this->nome = $n;
        $this->preco = $p;
        $this->marca = $m;
        $this->categoria = $c;
        $this->imagem  = $i;
    }
 
} ?>