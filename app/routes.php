<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/inscription', 'Default#inscription', 'inscription'],
		['GET|POST', '/profil', 'Default#profil', 'profil'],
	);