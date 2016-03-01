<?php

namespace Controller;

use \W\Controller\Controller;

class CguController extends Controller
{

	/**
	 * Page statique contenant les Conditions Générales d'Utilisation
	 */
	public function index()
	{
		$this->show('cgu/index');
	}


}