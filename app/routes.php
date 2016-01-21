<?php
	
	$w_routes = array(
        ['GET', '/', 'Buddy#index', 'index'], // liste des posts sur la home
		['GET|POST', '/login', 'Buddy#login', 'login'], //connexion
		['GET', '/logout', 'Budddy#logout', 'logout'],   //deconnexion
        ['GET|POST', '/register', 'Buddy#register', 'register'], // enregistrement
        ['GET', '/erreur', 'Buddy#erreur', 'erreur'], // ERREUR
        ['GET', '/inscription', 'Buddy#inscription', 'inscription'],   //deconnexion

	);