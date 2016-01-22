<?php
	
	$w_routes = array(
        ['GET', '/', 'Buddy#index', 'index'], // liste des posts sur la home
		['GET|POST', '/', 'Buddy#login', 'login'], // connexion
		['GET', '/logout', 'Budddy#logout', 'logout'],  // deconnexion
        ['GET', '/erreur', 'Buddy#erreur', 'erreur'],   // ERREUR
        ['GET|POST', '/inscription', 'Buddy#inscription', 'inscription'],   //register
      //  ['GET|POST', '/recherche', 'Buddy#recherche', 'recherche'],   //recherche

	);