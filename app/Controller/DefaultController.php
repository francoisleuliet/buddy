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
		if(isset($_POST['submit'])) {

			// validation des champs
			$manager = new \Manager\ProfilManager;
			$manager->setTable('profil');
			$email = trim($_POST["inscription"]["email"]);
			$password = trim($_POST["inscription"]["mot_de_passe"]);

			if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
				$_POST["inscription"]["mot_de_passe"] = password_hash($password, PASSWORD_DEFAULT);
			}

			$repertoire_upload = "C:/xampp/htdocs/buddy/upload/";		
			debug($_FILES);
			$fichier_upload = $repertoire_upload . basename($_FILES['inscription']['name']['photo_profil']);
			debug($fichier_upload);
			debug(basename($_FILES['inscription']['tmp_name']['photo_profil']));
			if (move_uploaded_file(basename($_FILES['inscription']['tmp_name']['photo_profil']), $fichier_upload)) {
				echo "Le téléversement est OK";
			} else {
				echo "Erreur...";
			}
				$_POST['inscription']['photo_profil'] = basename($_FILES['inscription']['name']['photo_profil']);
				debug($_POST);
				$manager->insert($_POST['inscription']);
				$this->redirectToRoute('home');
			}
			
			$this->show('buddy/inscription');
	}

}