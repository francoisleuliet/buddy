<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\WusersManager;
use \Manager\ProfilManager;



class BuddyController extends Controller
{

    /**
	 * Page d'accueil par défaut
	 */
    public function index()
    {
        $user = $this->getUser();
        $manager = new UserManager();
        $posts = $manager->findAll();
        $this->show('default/home', ['posts' => $posts, 'user' => $user]);
    }
//-------------------------------------------LOGIN--------------------------------------------------
    public function create()
    {
        $this->allowTo('admin');
        if(isset($_POST['create'])) {
            $manager = new UserManager();
            $manager->insert($_POST['myform']);
            $this->redirectToRoute('home');
        }
        $this->show('Buddy/create');
    }

    public function login() 
    {
        if(isset($_POST['create'])) {
            $auth = new AuthentificationManager();
            $userManager = new UserManager();
            if($auth->isValidLoginInfo($_POST['myform']['email'], $_POST['myform']['password'])) {
                $user = $userManager->getUserByUsernameOrEmail($_POST['myform']['email']);
                $auth->logUserIn($user);
                $this->redirectToRoute('home');
            }
            else {
                $this->redirectToRoute('erreur');
            }
        }
        $this->show('Buddy/login');
    }

    public function erreur() {
        $this->show('Buddy/erreur');
    }

    public function logout() {
        $auth = new AuthentificationManager();
        $auth->logUserOut();
        $this->redirectToRoute('home');
    }
    
    
//-------------------------------------------INSCRIPTION--------------------------------------------------
    
    
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
				die();
				$this->redirectToRoute('home');
			}
			
			$this->show('buddy/inscription');
	}


}