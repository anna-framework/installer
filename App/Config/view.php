<?php

/*
 |--------------------------------------------------------------------------
 | Configuração de view engines
 |--------------------------------------------------------------------------
 |
 | Permite alterar configurações referentes ao funcionamento das views
 |
 | Autor: Cristiano Gomes <cmgomes.es@gmail.com>
 | Data: 04/11/2015
 */

return [
		
	/**
	 * Para renderizar suas views, você pode utilizar as engines: blade, twig ou mustache
	 */
	'view-engine' => 'blade',

	/*
	 *  Local onde é armazenado as views, sinta-se livre para alterar
	 */
	'view-folder' => 'App/Views/',

	/*
	 * local onde será armazenado os caches das views 
	 */
	'cache-folder' => 'cache/'
];