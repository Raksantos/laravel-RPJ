<?php namespace rpj\Http\Controllers;

use Illuminate\Support\Facades\DB;
use rpj\Model\Usuario;
use rpj\dao\UsuariosDAO;
use rpj\Model\Produto;
use rpj\dao\ProdutosDAO;
use rpj\Model\Item;
use Illuminate\Http\Request;
use Session;

class HomepageController extends Controller {   
    
    public function home(){
        
        $produtosDAO = new ProdutosDAO();
        $produtos = $produtosDAO->getProdutos();
        
        return view('home',compact('produtos'));
    }

    public function logar(Request $request){
        
        $usuariosDAO = new UsuariosDAO();
        $usuario = $usuariosDAO->getUsuarios();

        Session::put('user', $usuario);

        return redirect('');
    }

    public function logout(){
        
        Session::forget('user');
        Session::forget('itens');
        Session::forget('quantidade');
        Session::forget('total');

        return redirect('');
    }
}

