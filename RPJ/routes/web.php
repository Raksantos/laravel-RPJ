<?php

Route::get('/', function(){
    return '<h1>RPJ - Nem existe direito ainda</h1>';
});

//falha miserável de usar o template
//Route::get('/', 'ProdutosController@home');

Route::get('/produtos', 'ProdutosController@listarProdutos');
