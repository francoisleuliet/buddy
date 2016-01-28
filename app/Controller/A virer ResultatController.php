<?php

namespace Controller;

use \W\Controller\Controller;

class ResultatController extends Controller
{


    public function resultat_single()
    {
        $manager = new \Manager\ResultatManager;
        $manager->setTable('annonce');
        
        
        if (isset($_GET['submit'])) {

		if (!empty($_GET['sous_categorie'])){
			$sous_categorie = $_GET['sous_categorie'];
		} else {
			$sous_categorie = "";
		}

		if (!empty($_GET['region'])){
			$region = $_GET['region'];
		} else {
			$region = "";
		}

		if (!empty($_GET['departement'])){
			$departement = $_GET['departement'];
		} else {
			$departement = "";
		}  
        
        if (!empty($_GET['code_postal'])){
			$code_postal = $_GET['code_postal'];
		} else {
			$code_postal = "";
		} 
        
        if (!empty($_GET['ville'])){
			$ville = $_GET['ville'];
		} else {
			$ville = "";
		} 

        
        $resultats = $manager->afficheResult($sous_categorie, $region, $departement,  $code_postal, $ville);



        $this->show('recherche/recherche', ['resultats' => $resultats]);
    }

}