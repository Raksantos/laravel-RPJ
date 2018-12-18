<?php namespace rpj\Http\Controllers;

use rpj\Model\Usuario;
use rpj\dao\UsuariosDAO;
use rpj\Model\Produto;
use rpj\dao\ProdutosDAO;

class ProdutoController extends Controller {   
    
    public function verProduto($produtoId){
        
        $usuariosDAO = new UsuariosDAO();
        $usuario = $usuariosDAO->getUsuarios();

        $produtosDAO = new ProdutosDAO();
        $produto = $produtosDAO->getProdutoById($produtoId);

        return view('produto', compact('usuario','produto'));
    }
}