<?php

/*
 |--------------------------------------------------------------------------
 | Configuração do aplicativo
 |--------------------------------------------------------------------------
 |
 | Permite alterar configurações referentes ao funcionamento das views
 |
 | Autor: Cristiano Gomes <cmgomes.es@gmail.com>
 | Data: 04/11/2015
 */

return [
    /*
     * Endereço do sistema
     */
    'url' => '',

    /*
     * Informa se o sistema irá gerar cache
     */
    'cache' => true,

    /*
     * Permite exibição em tela dos erros e warnings dependendo do ambiente
     * além alterar outros fatores e comportamentos
     *
     * Valores aceitos: development, production
     */
    'enviroment' => 'development',

    /*
     * Apenas o nome do desenvolvedor principal
     */
    'developer' => 'Cristiano Gomes <cmgomes.es@gmail.com>',

    /*
     * Informa ao serviço de work manager qual a quantidade de memória que ele deve manter-se limitado, caso zero não haverá verificação de memória
     */
    'work-limit-memory' => 25
];
