<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\WUsersManager;
use \Manager\ProfilManager;



class BuddyController extends Controller
{

    /**
	 * Page d'accueil par défaut
	 */
    public function index(){
        $user = $this->getUser();
        $manager = new UserManager();
        $posts = $manager->findAll();
        $this->show('buddy/index', ['posts' => $posts, 'user' => $user]);
    }

    //-------------------------------------------LOGIN--------------------------------------------------

    public function create(){
        $this->allowTo('admin');
        if(isset($_POST['create'])) {
            $manager = new UserManager();
            $manager->insert($_POST['login']);
            $this->redirectToRoute('index');
        }
        $this->show('Buddy/create');
    }

    public function login(){

        if(isset($_POST['create'])) {
            $auth = new AuthentificationManager();
            $userManager = new UserManager();

            if($auth->isValidLoginInfo($_POST['login']['email'], $_POST['login']['password'])) {
                $user = $userManager->getUserByUsernameOrEmail($_POST['login']['email']);
                $auth->logUserIn($user);
                $this->redirectToRoute('succesLogin');
            }
            else {
                $this->redirectToRoute('erreur');
            }
        }
        $this->show('buddy/login');
    }

    public function succesLogin() {
        
        $this->show('Buddy/succesLogin');
    }

    public function erreur() {
        
        $this->show('Buddy/erreur');
    }

    public function logout() {
        $auth = new AuthentificationManager();
        $auth->logUserOut();
        $this->redirectToRoute('index');
    }

    public function recoverLogin(){

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            
            // vérifier que l'email existe
            $user_manager = new UserManager();
            $user = $user_manager->getUserByUsernameOrEmail($email);
            if(!$user) {
                $this->show('Buddy/erreur');
            } else {
                // si oui, générer un token
                // et envoyer un mail
                $user['email'];
            }
        }
        $this->show('Buddy/recoverLogin');
    }




    //-------------------------------------------INSCRIPTION--------------------------------------------------


    public function inscription()
    {
        if(isset($_POST['submit'])) {

            $profil_manager = new \Manager\ProfilManager;
            $profil_manager->setTable('profil');
            $email = trim($_POST["inscription"]["email"]);
            $password = trim($_POST["inscription"]["password"]);

            // validation des champs

            if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
                $_POST["inscription"]["password"] = password_hash($password, PASSWORD_DEFAULT);
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

            //--------------------------------------- PHOTO PROFIL ---------------------------------------

            $uploads_dir = 'C:/xampp/htdocs/buddy2/upload/';

            $tmp_name = $_FILES['inscription']['tmp_name']['photo_profil'];
            $name = $_FILES['inscription']['name']['photo_profil'];
            $result = move_uploaded_file($tmp_name, "$uploads_dir/$name");

            //debug($result);

            $_POST['inscription']['photo_profil'] = basename($_FILES['inscription']['name']['photo_profil']);

            // debug($_POST['inscription']);
            // die();
            $profil_manager->insert($_POST['inscription']);

            $this->redirectToRoute('succesForm');
        }

        $this->show('buddy/inscription');
    }

    public function succesForm() {
        $this->show('Buddy/succesForm');
    }

    ////-------------------------------------------RECHERCHE--------------------------------------------------
    //    
    //    public function recherche(){
    //        
    //        $this->show('buddy/recherche'); 
    //    }
    //
    //
}