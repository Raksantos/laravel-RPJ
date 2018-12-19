<?php


Route::get('/', 'HomepageController@home');

Route::get('/produto/{produtoId}', 'ProdutoController@verProduto');

Route::post('/adicionarProduto', 'CarrinhoController@addCarrinho');

Route::post('/removerProduto', 'CarrinhoController@removerDoCarrinho');

Route::get('/carrinho', 'CarrinhoController@verCarrinho');

Route::post('/login', 'HomepageController@logar');

Route::get('/logout', 'HomepageController@logout');