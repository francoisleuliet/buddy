<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
        ['GET|POST', '/annonce', 'Annonce#annonce', 'annonce'],
        ['GET|POST', '/recherche', 'Recherche#recherche', 'recherche'],
        ['GET|POST', '/resultat/[a:categorie]/[a:sous_categorie]/[a:region]/[a:departement]/[a:code_postal]/[a:ville]', 'Resultat#resultat', 'resultat']
        
	);