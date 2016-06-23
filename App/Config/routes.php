<?php

use Anna\Routers\Router;

/*
 |--------------------------------------------------------------------------
 | Routes
 |--------------------------------------------------------------------------
 |
 | Arquivo responsável por configurar as rotas do sistema
 |
 */

$router = Router::getInstance();

$router->add('/', 'HomeController::index');
$router->add('/index{any}', 'HomeController::index');
$router->add('/users', 'UsersController::index');
$router->add('/users/{any}', 'UsersController::index');

$router->add('/teste', 'TesteController::index');
