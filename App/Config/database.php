<?php

/*
 |--------------------------------------------------------------------------
 | Configuração do aplicativo
 |--------------------------------------------------------------------------
 |
 | Permite alterar configurações referentes ao funcionamento das views
 |
 | Autor: Cristiano Gomes <cmgomes.es@gmail.com>
 | Data: 06/11/2015
 */
return [
    /*
     * Conexão utilizada pela aplicação para persistencias
     */
    'connection' => [
        'driver'      => 'pdo_mysql',
        'host'        => 'localhost',
        'port'        => 3306,
        'user'        => 'anna',
        'password'    => 'anna',
        'db_name'     => 'anna',
        'charset'     => 'utf8',
        'collation'   => 'utf8_unicode_ci',
        'prefix'      => '',
        'unix_socket' => '',
    ],

    /*
     * Exemplos de configurações para outros bancos de dados suportados
     */
    'outras_possiveis_conexoes' => [
        'mysql' => [
            'driver'      => 'pdo_mysql',
            'host'        => 'localhost',
            'port'        => 3306,
            'user'        => 'anna',
            'password'    => 'anna',
            'db_name'     => 'anna',
            'charset'     => 'utf8',
            'collation'   => 'utf8_unicode_ci',
            'prefix'      => '',
            'unix_socket' => '',
        ],

        'sqlite' => [
            'driver'      => 'pdo_sqlite',
            'user'        => 'root',
            'password'    => '',
            'path'        => '',
            'memory'      => false,
        ],

        'mysqli' => [
            'driver'        => 'mysqli',
            'host'          => 'localhost',
            'port'          => 3306,
            'user'          => 'root',
            'password'      => '',
            'db_name'       => 'anna',
            'charset'       => 'utf8',
            'prefix'        => '',
            'unix_socket'   => '',
            'driverOptions' => '',
        ],

        'pgsql' => [
            'driver'      => 'pdo_pgsql',
            'host'        => 'localhost',
            'port'        => 3306,
            'user'        => 'root',
            'password'    => '',
            'db_name'     => 'anna',
            'charset'     => 'utf8',
            'sslmode'     => '',
            'sslrootcert' => '',
        ],

        'pdo_oci / oci8' => [
            'driver'       => 'oci8', //ou pdo_oci
            'host'         => 'localhost',
            'port'         => 3306,
            'user'         => 'root',
            'password'     => '',
            'db_name'      => 'anna',
            'charset'      => 'utf8',
            'servicename'  => '',
            'service'      => true,
            'pooled'       => false,
            'instancename' => '',
        ],

        'pdo_sqlsrv / sqlsrv' => [
            'driver'      => 'pdo_sqlsrv', // ou sqlsrv
            'host'        => 'localhost',
            'port'        => 3306,
            'user'        => 'root',
            'password'    => '',
            'db_name'     => 'anna',
        ],

        'sqlanywhere' => [
            'driver'      => 'sqlanywhere',
            'host'        => 'localhost',
            'port'        => 3306,
            'user'        => 'root',
            'password'    => '',
            'db_name'     => 'anna',
            'server'      => '',
            'persistent'  => false,
        ],

    ],

    /*
     * Ativa ferramentas do ORM para debug no ambiente de desenvolvimento
     */
    'debug' => true,

    /*
     * Define qual será o adaptador utilizado pelo sistema, por padrão o sistema oferece
     * o adaptador para Doctrine2 ORM que é utilizado pelo repository padrão.
     * Para utilizar outro ORM basta registrar um novo adaptador e utiliza-los em seu repositório
     */
    'adapter' => Anna\Databases\Adapters\DoctrineAdapter::class,

    /*
     * Softdelete ativo faz com que o sistema ao invés de deletar os registros do banco de dados, apenas marque o
     * campo configurado em 'delflag' para 1
     */
    'softdelete' => true,

    /*
     * Define o sufixo do nome nas tabelas que será utilizado para softdelete
     * todas as buscas retornadas pelas consultas padrões irão consderar este campo com valor null para retorno dos
     * dados
     */
    'delflag' => '_deleted_at',
];
