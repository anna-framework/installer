<?php

/*
 |--------------------------------------------------------------------------
 | Bootstrap
 |--------------------------------------------------------------------------
 |
 | Arquivo responsável carregar as configurações iniciais
 |
 | Autor: Cristiano Gomes <cmgomes.es@gmail.com>
 | Data: 04/11/2015
 */

date_default_timezone_set('America/Sao_Paulo');

/*
 * Separador de pasta universal para uso em caminhos fisicos
 * @var string
 */
define('DS', DIRECTORY_SEPARATOR);

/*
 * Separador de caminhos universal, para uso em caminhos fisicos
 * @var string
 */
define('PS', PATH_SEPARATOR);

/*
 * Quebra de linha universal, para uso em escritas de arquivo
 * @var string
 */
define('EOL', PHP_EOL);

/**
 * Carregando o autoloader do composer.
 */
require_once 'vendor/autoload.php';

/*
 * Carregando as configurações iniciais
 */
$config = Anna\Config::getInstance()->make();
