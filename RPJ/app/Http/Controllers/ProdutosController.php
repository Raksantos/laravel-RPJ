<?php namespace rpj\Http\Controllers;

use Illuminate\Support\Facades\DB;
use rpj\Model\Produto;

class ProdutosController extends Controller {
    public function listarProdutos(){
        $html = '<h1>Listagem de Produtos</h1>';

        $html .= '<ul>';
        /*
        $produtos = DB::select('select * from t_produto');

        foreach ($produtos as $p){
            $html .= '<li> Nome: '. $p->nome .', Preço: '. $p->preco .', Marca: '. $p->marca .'</li>'; 
        }*/
        
        $prod = new Produto('Galaxy S9', '3000,00', 'Samsung', 'Smartphones');
        $prod2 = new Produto('iPhone XS', '6000,00', 'Apple', 'Smartphones');
        $html .= '<li> Nome: '. $prod->nome .', Preço: '. $prod->preco .', Marca: '. $prod->marca . ', Categoria: '. $prod->categoria . '</li>';
        $html .= '<li> Nome: '. $prod2->nome .', Preço: '. $prod2->preco .', Marca: '. $prod2->marca . ', Categoria: '. $prod2->categoria . '</li>';
        

        $html .= '</ul>';
        return $html;
    }
    
    public function home(){
        
        $prod = new Produto('Galaxy S8', '3000,00', 'Samsung', 'Smartphones', './img/s8.png');
        $prod2 = new Produto("Macbook Pro 15'", '18000,00', 'Apple', 'Computadores', './img/macbook.png');
        $prod3 = new Produto('Notebook MSI', '4000,00', 'MSI', 'Computadores', './img/note_msi.png');

        $produtos = [$prod, $prod2, $prod3];
        
        return view('home')->with('produtos', $produtos);
    }
}

