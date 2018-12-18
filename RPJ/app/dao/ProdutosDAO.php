<?php namespace rpj\dao;

use rpj\Model\Produto;

class ProdutosDAO{
    
    public function getProdutos(){
        $prod1 = new Produto(1,'Galaxy S8', '3000,00', 'Samsung', 'Smartphones', './img/s8.png');
        $prod2 = new Produto(2,'Macbook Pro 15" ', '18000,00', 'Apple', 'Computadores', './img/macbook.png');
        $prod3 = new Produto(3,'Notebook MSI', '4000,00', 'MSI', 'Computadores', './img/note_msi.png');
        $prod4 = new Produto(4,'Headphone Superlux', '160,00', 'Superlux', 'Fones de Ouvido', './img/fonehd681.png');
        $prod5 = new Produto(5,'Tablet Sony', '2450,00', 'Sony', 'Tablet', './img/sonyz2.png');
        $prod6 = new Produto(6,'Headphone Sony', '200,00', 'Sony', 'Fones de Ouvido', './img/sonycd580.png');
        $prod6 = new Produto(7,'Notebook Asus', '2200,00', 'Asus', 'Computadores', './img/notebookasus.png');
        $prod7 = new Produto(8,'Macbook Air', '4579,00', 'Apple', 'Computadores', './img/macbookair.png');
        $produtos = [$prod1, $prod2, $prod3, $prod4, $prod5, $prod6, $prod7];
        return $produtos;
    }

    public function getProdutoById($id){
        
        $produto = new Produto($id,'Galaxy S8', '3000,00', 'Samsung', 'Smartphones', './img/s8.png');
        
        return $produto;
    }
}