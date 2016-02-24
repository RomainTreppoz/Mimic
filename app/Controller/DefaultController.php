<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	/**
	 * Page d'accueil par défaut
	 */
	public function publier()
	{
		$this->show('default/publier');
	}

	public function privateHome() {
		// Récupére l'utilisateur connecté
		$user = $this->getUser();
		// debug($user);
		// useless à part pour envoyer $email à la vue
		$email = $user['email'];
		$this->show('default/home', ['email' => $email]);
	}

	public function backoffice() {
		// Limite l'accès aux users ayant le role admin
		$this->allowTo('admin');
		// $this->allowTo(['admin', 'member']); -> pour autoriser plusieurs rôles

		echo 'Backoffice';
	}

}