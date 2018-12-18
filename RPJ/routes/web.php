<?php


Route::get('/', 'HomepageController@home');

Route::get('/produto/{produtoId}', 'ProdutoController@verProduto');
