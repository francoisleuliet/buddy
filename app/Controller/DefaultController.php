<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;

use Manager\HobbyManager;
use AdamWathan\Form as Form;
use Helper\Helper;

class DefaultController extends Controller
{

	public function home()
	{
		$builder = new Form\FormBuilder;
        $helper = new Helper;
        
        $resultats = $helper->getLibelles();
        $this->show('default/home', ["builder" =>$builder, "libelles" =>$resultats[0], "sslibelles" =>$resultats[1]]);
        
	}
    
   public function inscription()
	{
        $helper = new Helper;
        $les_libelles = $helper->getLibelles();
		
       if(isset($_POST['submit'])) {

			// Les managers
            $user_manager = new UserManager();
            $profil_manager = new \Manager\ProfilManager;
			$profil_manager->setTable('profil');
            $hobby_manager = new HobbyManager();
            $hobby_manager->setTable('hobby');
             
            
            // Code 
            
			$email = trim($_POST["inscription"]["email"]);
			$password = trim($_POST["password"]);

			if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
				$_POST["inscription"]["password"] = password_hash($password, PASSWORD_DEFAULT);
			}


			$uploads_dir = 'C:/xampp/htdocs/buddy/public/assets/upload/profil';

            $tmp_name = $_FILES['inscription']['tmp_name']['photo_profil'];
            $name = time() ."_" . $_FILES['inscription']['name']['photo_profil'];
            $result = move_uploaded_file($tmp_name, "$uploads_dir/$name");
            
            $_POST['inscription']['photo_profil'] = $name;
            if($result) {
                    $messageInsertion = "Ta photo a bien été envoyée.";
                } else {
                    $messageInsertion = "Ta photo n'a pas été envoyée. Merci de la recharger.";
                }
            
            //debug($_POST);
            
           // vérification email
           if($user_manager->emailExists($email)) {
                $this->show('default/inscription',["libelles" =>$les_libelles[0], "sslibelles" =>$les_libelles[1], "erreur" => "Cet email est déjà utilisé","messageInsertion"=>$messageInsertion]);
           }
           
            // insertion dans wusers = création d'un user
            $user_manager->insert(
                ['username' => $_POST['inscription']['email'], 
                 'email' => $_POST['inscription']['email'],
                 'password' => $_POST["inscription"]["password"],
                 'role' => 'user'
                ]
            );

                            
            $user = $user_manager->getUserByUsernameOrEmail($_POST['inscription']['email']);
            //debug($user);
            $profil_manager->insert(array_merge($_POST['inscription'], ['id_wuser' => $user['id']]));
            //debug(array_merge($_POST['inscription'], ['id_wuser' => $user['id']]));die();
            $profil = $profil_manager->getId($_POST['inscription']['email']);
            $id_profil = $profil['id'];
            
            $hobby_manager->insert(
                ['id_profil' => $id_profil, 
                 'id_categorie' => $_POST['hobby']['categorie'],
                 'id_ss_categorie' => $_POST['hobby']['sous_categorie'],
                 'niveau' => $_POST['hobby']['niveau']
                ]
            );
            
            $this->redirectToRoute('succesForm');
			}
			
			$this->show('default/inscription',["libelles" =>$les_libelles[0], "sslibelles" =>$les_libelles[1]]);
	}
    
    public function commentmarche()
	{
		$this->show('default/commentmarche');
	}
    
    public function annonce()
	{
		$this->show('default/annonce');
	}
    
    
    public function logout() {
        $auth = new AuthentificationManager();
        $auth->logUserOut();
        $this->redirectToRoute('home');
    }
    
    public function succesLogin() {
        
        $this->show('default/home');
    }
}