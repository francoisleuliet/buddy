<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
    
    public function inscription()
	{
		$this->show('default/inscription');
	}
    
    public function commentmarche()
	{
		$this->show('default/commentmarche');
	}
    
    public function annonce()
	{
		$this->show('default/annonce');
	}
}