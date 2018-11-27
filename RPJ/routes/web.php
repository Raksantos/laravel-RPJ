<?php

Route::get('/', function(){
    return '<h1>RPJ - Nem existe direito ainda</h1>';
});

Route::get('/produtos', 'ProdutosController@listarProdutos');
