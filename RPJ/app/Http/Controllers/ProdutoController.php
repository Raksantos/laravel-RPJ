<?php namespace rpj\Http\Controllers;

use rpj\Model\Usuario;
use rpj\dao\UsuariosDAO;
use rpj\Model\Produto;
use rpj\dao\ProdutosDAO;
use rpj\Model\Item;
use Illuminate\Http\Request;
use Session;

class ProdutoController extends Controller {   
    
    public function verProduto($produtoId){
        
        $usuariosDAO = new UsuariosDAO();
        $usuario = $usuariosDAO->getUsuarios();

        $produtosDAO = new ProdutosDAO();
        $produto = $produtosDAO->getProdutoById($produtoId);

        return view('produto', compact('usuario','produto'));
    }

    public function addCarrinho(Request $request){
        
        $produto = new Produto(
                                $request->id,
                                $request->nome,
                                $request->preco,
                                $request->marca,
                                $request->categoria,
                                $request->imagem
                            );

        $item = new Item($produto, $request->quantidade);

        if(Session::has('itens')){
            
            $itens = Session::get('itens');
            $encontrado = false;
            forEach($itens as $i){
                if($i->produto->id == $request->id){
                    $i->quantidade += $request->quantidade;
                    $encontrado = true;
                }
            }
            if(!$encontrado)
                array_push($itens, $item);
            
            $total = Session::get('total');
            $total += $request->quantidade * $request->preco;

            $quantidade = Session::get('quantidade');
            $quantidade += $request->quantidade;

            Session::put('itens', $itens);
            Session::put('total', $total);
            Session::put('quantidade', $quantidade);

        } else{
            $itens = [$item];
            $total = $request->quantidade * $request->preco;
            $quantidade = $request->quantidade;
            Session::put('itens', $itens);
            Session::put('total', $total);
            Session::put('quantidade', $quantidade);
        }

        return redirect('');
    }
}