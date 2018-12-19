<?php namespace rpj\Http\Controllers;

use rpj\Model\Produto;
use rpj\dao\ProdutosDAO;
use rpj\Model\Item;
use Illuminate\Http\Request;
use Session;

class CarrinhoController extends Controller {   
    
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

    public function removerDoCarrinho(Request $request){
        
        $itens = Session::get('itens');
        forEach($itens as $key => $i){
            if($i->produto->id == $request->id){
                $chave = $key;
            }
        }
        unset($itens[$chave]);
        
        if(isset($itens))
            Session::put('itens', $itens);
        else
            Session::forget('itens');

        $total = Session::get('total');
        $total -= $request->quantidade * $request->preco;

        $quantidade = Session::get('quantidade');
        $quantidade -= $request->quantidade;
        
        Session::put('total', $total);
        Session::put('quantidade', $quantidade);

        return redirect('');
    }

    public function verCarrinho(){
        return view('carrinho');
    }
}