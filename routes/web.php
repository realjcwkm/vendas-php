<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/clientes', 'ClienteController@getAllClientes');
$router->post('/cliente', 'ClienteController@postCliente');

$router->get('/produtos', 'ProdutoController@getAllProdutos');
$router->post('/produto', 'ProdutoController@postProduto');

$router->get('/vendas', 'VendaController@getAllVendas');
$router->post('/venda', 'VendaController@postVenda');
$router->delete('/venda/{id}', 'VendaController@deleteVenda');