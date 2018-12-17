<?php namespace rpj\Model;

class Produto{
    public $id;
    public $nome;
    public $preco;
    public $marca;
    public $categoria;
    public $imagem;

    //construtor da classe
    function __construct($i, $n, $p, $m, $c, $img){
        $this->id = $i;
        $this->nome = $n;
        $this->preco = $p;
        $this->marca = $m;
        $this->categoria = $c;
        $this->imagem  = $img;
    }
 
} ?>