<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\WUsersManager;
use \Manager\ProfilManager;


class DefaultController extends Controller
{

	public function index()
	{
		$this->show('default/index');
	}

	public function inscription()
	{
		if(isset($_POST['submit'])) {

			// validation des champs
			$profil_manager = new \Manager\ProfilManager;
			$profil_manager->setTable('profil');
			$email = trim($_POST["inscription"]["email"]);
			$password = trim($_POST["password"]);

			if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
				$_POST["inscription"]["password"] = password_hash($password, PASSWORD_DEFAULT);
			}

			if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($confirmpassword)) {
				$_POST["inscription"]["confirmpassword"] = password_hash($confirmpassword, PASSWORD_DEFAULT);
			}
            
            
            // création du user (wusers)
            $register = [];
            // username
            $register['username'] = $_POST["inscription"]['nom'];
            // email
            $register['email'] = $_POST["inscription"]["email"];
            // password
            $register['password'] = $_POST["inscription"]["password"];
            // role
            $register['role'] = 'user';
            $userManager = new UserManager();
            $userManager->insert($register);

			$uploads_dir = 'C:/xampp/htdocs/buddy/upload/profil';

            $tmp_name = $_FILES['inscription']['tmp_name']['photo_profil'];
            $name = time() ."_" . $_FILES['inscription']['name']['photo_profil'];
            $result = move_uploaded_file($tmp_name, "$uploads_dir/$name");
            
            debug($result);
            
            $_POST['inscription']['photo_profil'] = $name;
            
            $profil_manager->insert($_POST['inscription']);
				$this->redirectToRoute('index');
			}
			
			$this->show('buddy/inscription');
	}

	public function profil()
	{
		$this->show('buddy/profil');
	}

}