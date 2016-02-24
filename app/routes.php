<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		
		['GET', '/merci', 'Thanks#index', 'merci'],

		
		['GET', '/publier', 'Publish#index', 'publier'],
		['GET', '/publier/', 'Publish#index', 'publier2'],
		['GET', '/publiyer/', 'Publish#index', 'publier3'],

		['POST', '/publier', 'Publish#submit', 'publierPost'],


		


		['GET', '/login', 'Login#index', 'login'],
		['GET', '/connexion', 'Login#index', 'login2'],
		['GET', '/connection', 'Login#index', 'login3'],
		
		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],
		['GET', '/logout', 'Login#logout', 'logout'],

		['GET', '/register', 'Register#index', 'register'],
		['GET', '/s\'enregister', 'Register#index', 'register3'],
		['GET', '/nouveau', 'Register#index', 'register1'],
		['GET', '/register', 'Register#index', 'register2'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],

		['GET', '/private', 'Default#privateHome', 'privateHome'],
		['GET', '/bo', 'Default#backoffice', 'bo'],

	);