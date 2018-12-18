<?php namespace rpj\Model;

class Item{
    public $produto;
    public $quantidade;

    //construtor da classe
    function __construct($produto, $quantidade){
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }
 
} ?>