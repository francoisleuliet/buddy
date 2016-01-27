<?php
	
	$w_routes = array(

		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],
        ['GET|POST', '/post_annonce', 'Annonce#post_annonce', 'post_annonce'],
        ['GET|POST', '/recherche', 'Recherche#recherche', 'recherche'],
        ['GET|POST', '/resultat/[a:categorie]/[a:sous_categorie]/[a:region]/[a:departement]/[a:code_postal]/[a:ville]', 'Resultat#resultat', 'resultat'],
		['GET', '/commentmarche', 'Default#commentmarche', 'commentmarche'],
		['GET', '/annonce', 'Default#annonce', 'annonce'],


		['GET', '/aide', 'Footer#aide', 'aide'],
		['GET', '/legal', 'Footer#legal', 'legal'],
		['GET', '/cgu', 'Footer#cgu', 'cgu'],
		['GET', '/envoimail', 'Footer#envoimail', 'envoimail'],
		['GET|POST', '/contact', 'Footer#contact', 'contact'],
	);