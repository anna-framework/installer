<?php

namespace App\Controllers;

use Anna\Controller;

/**
 * ------------------------------------------------------
 * HomeController
 * ------------------------------------------------------
 *
 * Gerado automaticamente pela Anna
 *
 * @since 16/11/2015
 * @package App\Controllers;
 */
class HomeController extends Controller{

	public function index(){
        return view('home');
	}

}
