<?php

namespace Controller;

use \W\Controller\Controller;
use AdamWathan\Form as Form;
use Helper\Helper;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$builder = new Form\FormBuilder;
        $helper = new Helper;
        
        $resultats = $helper->getLibelles();
        $this->show('default/home', ["builder" =>$builder, "libelles" =>$resultats[0], "sslibelles" =>$resultats[1]]);
        
	}
    
    public function inscription()
	{
		$this->show('default/inscription');
	}
}