<?php
	
	$w_routes = array(

        ['GET|POST', '/annonce', 'Annonce#annonce', 'annonce'],
        ['GET|POST', '/recherche', 'Recherche#recherche', 'recherche'],
        ['GET', '/', 'Buddy#index', 'index'], // liste des posts sur la home
		['GET|POST', '/', 'Buddy#login', 'login'], // connexion
		['GET', '/logout', 'Budddy#logout', 'logout'],  // deconnexion
        ['GET', '/erreur', 'Buddy#erreur', 'erreur'],   // ERREUR
        ['GET', '/succesLogin', 'Buddy#succesLogin', 'succesLogin'],   // session user comfirmer;
        ['GET', '/succesForm', 'Buddy#succesForm', 'succesForm'],   // Formulaire valider;
        ['GET|POST', '/inscription', 'Buddy#inscription', 'inscription'],   //register
        ['GET|POST', '/recoverLogin', 'Buddy#recoverLogin', 'recoverLogin'],   // mot de passe oublié;
        //['GET|POST', '/recherche', 'Buddy#recherche', 'recherche'],   //recherche

	);