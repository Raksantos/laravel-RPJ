<?php


Route::get('/', 'ProdutosController@home');

Route::get('/produtos', 'ProdutosController@listarProdutos');
