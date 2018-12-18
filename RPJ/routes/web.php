<?php


Route::get('/', 'HomepageController@home');

Route::get('/produto/{produtoId}', 'ProdutoController@verProduto');

Route::post('/adicionarProduto', 'ProdutoController@addCarrinho');

Route::post('/removerProduto', 'ProdutoController@removerDoCarrinho');