<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;


class LoginController extends Controller
{

	/**
	 * Page d'index de connexion
	 */
	public function index()
	{
		$this->show('login/index');
	}

	public function loginUser()
	{
		// Affecter une variable à chaque valeur clé de $_POST
		$email = trim(htmlentities($_POST['email']));
		$password = trim(htmlentities($_POST['password']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// Instanciation d'un object de type UserManager
		$userManager = new UserManager();
		$userManager->setTable('users'); // Bug du framework le nom de la table est mal défini

		$resultUser = $userManager->getUserByUsernameOrEmail($email);

		if($resultUser) {
			// Instanciation d'un object de type AuthentificationManager
			$authentificationManager = new AuthentificationManager();
			// Cette méthode teste si le mot de passe est valide, $password ici est en clair
			if($authentificationManager->isValidLoginInfo($email, $password)) {
				$authentificationManager->logUserIn($resultUser);
				// Redirection
				$this->redirectToRoute('privateHome');
			}
			else {
				$errors['login'] = "Mauvais mot de passe";
			}
		}
		else {
			$errors['login'] = "Cette adresse e-mail n'existe pas";
		}

		$this->show('login/index', ['errors' => $errors]);
		
	}

	public function logout() {
		// Instanciation d'un object de type AuthentificationManager
		$authentificationManager = new AuthentificationManager();
		$authentificationManager->logUserOut();

		// Redirection
		$this->redirectToRoute('home');
	}

}