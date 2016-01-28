<?php

namespace Controller;

use \W\Controller\Controller;
use AdamWathan\Form as Form;
use Helper\Helper;

class RechercheController extends Controller
{

	public function recherche()
	{
        $builder = new Form\FormBuilder;
        $helper = new Helper;
        
        $resultats = $helper->getLibelles();
              
        
		$this->show('recherche/recherche',["builder" =>$builder, "libelles" =>$resultats[0], "sslibelles" =>$resultats[1]]);
	}
}

