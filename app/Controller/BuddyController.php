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

    public function emailExists($email){ 

        $app = getApp();

        $sql = "SELECT ".$app->getConfig('security_email_property')." FROM " . $app->getConfig('security_user_table') .
            " WHERE " . $app->getConfig('security_email_property') . " = :email LIMIT 1";
        $dbh = ConnectionManager::getDbh();
        $sth = $dbh->prepare($sql);
        $sth->bindValue(":email", $email);
        if ($sth->execute()){
            $foundUser = $sth->fetch();
            if ($foundUser){
                return true;
            }
        }

        return false;}

    public function usernameExists($username){

        $app = getApp();

        $sql = "SELECT ".$app->getConfig('security_username_property')." FROM " . $app->getConfig('security_user_table') .
            " WHERE " . $app->getConfig('security_username_property') . " = :username LIMIT 1";
        $dbh = ConnectionManager::getDbh();
        $sth = $dbh->prepare($sql);
        $sth->bindValue(":username", $username);
        if ($sth->execute()){
            $foundUser = $sth->fetch();
            if ($foundUser){
                return true;
            }
        }

        return false;
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

        if (isset($_POST['email'])){

            $email = $_POST['email'];
            $sql = "SELECT * FROM wusers WHERE email='$email'";
            $result = PDO::query($query)or die(PDO::errorInfo());
            $count = PDO::MYSQL_ATTR_FOUND_ROWS($result);
            if($count === false ) {
                echo 'Erreur SQL : ' . PDO::errorInfo();
            }



            if($count==1)
            {
                $rows=mysql_fetch_array($result);
                $pass  =  $rows['password'];//FETCHING PASS
                echo "your pass is ::".($pass)."";

                $to = $rows['email'];
                echo "your email is ::".$email;

                //Details for sending E-mail
                $from = "Coding Cyber";
                $url = "http://buddy2/";
                $body  =  "Coding Cyber password recovery Script

		        -----------------------------------------------
		        Url : $url;
		        email Details is : $to;
		        Here is your password  : $pass;
		        Sincerely,
		        Coding Cyber";
   
                $from = "le mail";
                $subject = "CodingCyber Password recovered";
                $headers1 = "From: $from\n";
                $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
                $headers1 .= "X-Priority: 1\r\n";
                $headers1 .= "X-MSMail-Priority: High\r\n";
                $headers1 .= "X-Mailer: Just My Server\r\n";
                $sentmail = mail ( $to, $subject, $body, $headers1 );
            } else {
                if ($_POST ['email'] != "") {
                    echo "<span style='color: #ff0000;'> 'Votre E-mail n'a pas était trouvé</span>";
                }
            };

            //If the message is sent successfully, display sucess message otherwise display an error message.
            if($sentmail==1)
            {
                echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
            }
            else
            {
                if($_POST['email']!="")
                    echo "<span style='color: #ff0000;'> Impossible d'envoyer l''E-mail de récuperation.Un probleme est survenu pendant l'envois...</span>";
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