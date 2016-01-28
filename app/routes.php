<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
        ['GET|POST', '/annonce', 'Annonce#annonce', 'annonce'],
        ['GET|POST', '/recherche', 'Recherche#recherche', 'recherche'],
        
	);