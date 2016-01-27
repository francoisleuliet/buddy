<?php
	
	$w_routes = array(
		['GET', '/', 'Inscription#home', 'home'],

		['GET', '/aide', 'Footer#aide', 'aide'],
		['GET', '/legal', 'Footer#legal', 'legal'],
		['GET', '/cgu', 'Footer#cgu', 'cgu'],
		['GET', '/envoimail', 'Footer#envoimail', 'envoimail'],
		['GET|POST', '/contact', 'Footer#contact', 'contact'],

		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],
	);