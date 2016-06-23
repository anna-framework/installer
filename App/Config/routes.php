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