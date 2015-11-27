<?php

/*
 |--------------------------------------------------------------------------
 | Configuração do aplicativo
 |--------------------------------------------------------------------------
 |
 | Conjunto de opções para configuração do sistema de cache tanto para o aplicativo em geral quanto apenas
 | para banco de dados
 |
 | Autor: Cristiano Gomes <cmgomes.es@gmail.com>
 | Data: 18/11/2015
 */

return [
	/* Informa se o doctrine disponibilizara ferramentas de cache ou não */
	'cache' => false,

	/**
	 *  Seleciona qual a engine de cache deseja usar, as dispoíveis são:
	 *  redis, apc, memcache, memcached e xcache
	 *
	 *	Para utilizar qualquer uma dessas engines o seu PHP deve estar configuração com a extensão correta
	 */
	'cache-engine' => 'memcache',

	/**
	 * Mem todas as engines utilizam essas configurações, como por exemplo APC ou xCache
	 */
	'cache-config' => [
		'host' => '127.0.0.1',
		'port' => 11211//6379
	],

	'lifetime' => 3200
];
