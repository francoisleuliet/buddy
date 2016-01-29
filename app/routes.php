<?php
	
	$w_routes = array(

		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/inscription', 'Default#inscription', 'inscription'],
        ['GET|POST', '/post_annonce', 'Annonce#post_annonce', 'post_annonce'],
        ['GET', '/merci', 'Annonce#merci', 'merci'],
        ['GET|POST', '/recherche', 'Recherche#recherche', 'recherche'],
        ['GET', '/detail/[:id]', 'Recherche#detail', 'detail'],
        ['GET|POST', '/profil/[:id]', 'Profil#profil', 'profil'],
		['GET', '/commentmarche', 'Default#commentmarche', 'commentmarche'],
		['GET', '/annonce', 'Default#annonce', 'annonce'],
        ['GET', '/logout', 'Default#logout', 'logout'],  // deconnexion
        ['GET', '/aide', 'Footer#aide', 'aide'],
		['GET', '/legal', 'Footer#legal', 'legal'],
		['GET', '/cgu', 'Footer#cgu', 'cgu'],
		['GET', '/envoimail', 'Footer#envoimail', 'envoimail'],
		['GET|POST', '/contact', 'Footer#contact', 'contact'],
        ['GET', '/succesLogin', 'Buddy#succesLogin', 'succesLogin'],   // session user comfirmé;
        
        
        
        
        ['GET|POST', '/succesForm', 'Buddy#succesForm', 'succesForm'],   // Formulaire validé;
        //['GET|POST', '/inscription', 'Buddy#inscription', 'inscription'],   //register
        ['GET|POST', '/recoverLogin', 'Buddy#recoverLogin', 'recoverLogin'],
        ['GET|POST', '/', 'Buddy#login', 'login'], // connexion
        
        ['GET', '/erreur', 'Buddy#erreur', 'erreur'],   // ERREUR
//        ['GET|POST', '/profil', 'Default#profil', 'profil'],


		
    
        //['GET', '/', 'Buddy#index', 'index'], // liste des posts sur la home
    
	);

