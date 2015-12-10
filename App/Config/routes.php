<?php

use Anna\Routers\Router;

/*
 |--------------------------------------------------------------------------
 | Routes
 |--------------------------------------------------------------------------
 |
 | Arquivo responsável por configurar as rotas do sistema
 |
 | Autor: Cristiano Gomes <cmgomes.es@gmail.com>
 | Data: 05/11/2015
 */

$router = Router::getInstance();

// $router->add('/', 'HomeController::index');
// $router->add('/index', 'HomeController::index');
//
// $router->add('/xupa-essa-uva', 'ParreraController::index');
//
// $router->addPrefix('/prefixo', function($router){
//     $router->add('/sala', 'SalaController::index');
//     $router->add('/minhaConta/{sigla}', 'UserController::index');
//
//     $router->addWatcher('Auth', function($router){
//         $router->add('/chupinha', 'ChupinhaController::index');
//         $router->add('/opa-gangnam-style', 'OkanoController@index');
//     });
// });

$router->add('/', 'HomeController::index');
$router->add('/index{any}', 'HomeController::index');
$router->add('/users', 'UsersController::index');
$router->add('/users/{any}', 'UsersController::index');

$router->add('/teste', 'TesteController::index');
