<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\WusersManager;



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

}