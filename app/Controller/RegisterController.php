<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \DateTime;

class RegisterController extends Controller
{

	/**
	 * Page d'index d'enregistrement
	 */
	public function index()
	{
		$this->show('register/index');
	}

		public function registerUser()
	{
		//debug($_POST);

		// Affecter une variable à chaque valeur clé de $_POST
		$email = trim(htmlentities($_POST['email']));
		$password = trim(htmlentities($_POST['password']));
		$confirmPassword = trim(htmlentities($_POST['confirmPassword']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// Instanciation d'un object de type UserManager
		$userManager = new UserManager();
		$userManager->setTable('users'); // Bug du framework le nom de la table est mal défini

		// Check de l'email
		if(empty($email) || (filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
			$errors['email'] = "Vérifiez votre adresse e-mail.";
		}
		elseif($userManager->emailExists($email)) { // Check en bdd que l'email existe
			$errors['email'] = "Cette adresse e-mail existe déjà";
		}

		// Check du password
		if($password != $confirmPassword) {
			$errors['password'] = "Les mots de passe ne sont pas identiques";
		}
		elseif(strlen($password) <= 5) {
			$errors['password'] = "Votre mot de passe doit faire au moins 6 caractères";
		}

		// S'il n'y pas d'erreurs
		if(empty($errors)) {
			// Crypter le mot de passe
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

			// Objet DateTime
			$date = new DateTime();

			// Enregistrement en bdd et renvoie un tableau
			$resultUser = $userManager->insert([
				'email' => $email,
				'password' => $hashedPassword,
				'role' => 'member',
				'created_at' => $date->format('Y-m-d H:i:s'),
				'updated_at' => $date->format('Y-m-d H:i:s')
			]);

			// debug($resultUser);

			// Teste que le tableau user est rempli
			if($resultUser) {
				// Authentifier l'utilisateur car l'inscription a réussi
				$authentificationManager = new AuthentificationManager();
				$authentificationManager->logUserIn($resultUser);

				// Redirection
				$this->redirectToRoute('privateHome');
			}

		}
		else {
			$this->show('register/index', ['errors' => $errors, 'email' => $email]);
		}


	}

}