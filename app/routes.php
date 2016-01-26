<?php
	
	$w_routes = array(
		['GET', '/', 'Inscription#home', 'home'],
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],
	);