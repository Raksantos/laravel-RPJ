<?php namespace rpj\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller {
    public function listarProdutos(){
        $html = '<h1>Listagem de Produtos</h1>';

        $html .= '<ul>';

        $produtos = DB::select('select * from t_produto');

        foreach ($produtos as $p){
            $html .= '<li> Nome: '. $p->nome .', Preço: '. $p->preco .', Marca: '. $p->marca .'</li>'; 
        }

        $html .= '</ul>';
        return $html;
    }
}

