<?php

namespace Controller;

use \W\Controller\Controller;

class HelpController extends Controller
{

	/**
	 * Page d'aide
	 */
	public function index()
	{
		$this->show('help/index');
	}


}