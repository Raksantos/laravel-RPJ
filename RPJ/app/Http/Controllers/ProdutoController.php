<?php namespace rpj\Http\Controllers;

use rpj\Model\Produto;
use rpj\dao\ProdutosDAO;
use Session;

class ProdutoController extends Controller {   
    
    public function verProduto($produtoId){
        
        $produtosDAO = new ProdutosDAO();
        $produto = $produtosDAO->getProdutoById($produtoId);
        
        if($produto != null)
            return view('produto', compact('produto'));
        else
            return view('naoencontrado');
    }

}