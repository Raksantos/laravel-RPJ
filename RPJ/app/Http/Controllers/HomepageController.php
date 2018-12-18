<?php namespace rpj\Http\Controllers;

use Illuminate\Support\Facades\DB;
use rpj\Model\Usuario;
use rpj\dao\UsuariosDAO;
use rpj\Model\Produto;
use rpj\dao\ProdutosDAO;
use rpj\Model\Item;
use Session;

class HomepageController extends Controller {   
    
    public function home(){
        
        $usuariosDAO = new UsuariosDAO();
        $usuario = $usuariosDAO->getUsuarios();
        $produtosDAO = new ProdutosDAO();
        $produtos = $produtosDAO->getProdutos();
        
        Session::put('user', $usuario);

        return view('home',compact('produtos'));
    }
}

