<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;


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
		if(isset($_POST['submit'])) {

			// validation des champs
            $user_manager = new UserManager();
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
            $name = time() ."_" . $_FILES['inscription']['name']['photo_profil'];
            $result = move_uploaded_file($tmp_name, "$uploads_dir/$name");
            
            
            
            $_POST['inscription']['photo_profil'] = $name;
            
            $user_manager->insert(
                ['username' => $_POST['inscription']['email'], 
                 'email' => $_POST['inscription']['email'],
                 'password' => $_POST["inscription"]["password"],
                 'role' => 'user'
                ]
            );
                
            $user = $user_manager->getUserByUsernameOrEmail($_POST['inscription']['email']);
            $manager->insert(array_merge($_POST['inscription'], ['id_wuser' => $user['id']]));
            $this->redirectToRoute('home');
			}
			
			$this->show('default/inscription');
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