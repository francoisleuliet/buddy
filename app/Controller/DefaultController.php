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
			$password = trim($_POST["password"]);

			if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
				$_POST["inscription"]["password"] = password_hash($password, PASSWORD_DEFAULT);
			}

			if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($confirmpassword)) {
				$_POST["inscription"]["confirmpassword"] = password_hash($confirmpassword, PASSWORD_DEFAULT);
			}

			$uploads_dir = 'C:/xampp/htdocs/buddy/upload/profil';

            $tmp_name = $_FILES['inscription']['tmp_name']['photo_profil'];
            $name = $_FILES['inscription']['name']['photo_profil'];
            $result = move_uploaded_file($tmp_name, "$uploads_dir/$name");
            
            debug($result);
            
            $_POST['inscription']['photo_profil'] = basename($_FILES['inscription']['name']['photo_profil']);
            
            $manager->insert($_POST['inscription']);
				$this->redirectToRoute('home');
			}
			
			$this->show('buddy/inscription');
	}

}