<?php

namespace Controller;
use \W\Controller\Controller;
use AdamWathan\Form as Form;
use \Manager\AnnonceManager;
use Helper\Helper;


class AnnonceController extends Controller
{
    public function post_annonce()
    {
        $this->allowTo(['user']);
        $builder = new Form\FormBuilder;
        $obligatoire=array('annonce[titre]','annonce[categorie]','annonce[description]');
        $erreur = "";

        if(isset($_POST['submit'])) 
        {
                
            
                $manager = new \Manager\AnnonceManager;
                $manager->setTable('annonce');
                /*debug($_FILES);*/

                $uploads_dir = 'C:/xampp/htdocs/buddy/upload/annonce';		
                $tmp_name = $_FILES['photo_annonce']['tmp_name'];
                if(!empty($_FILES['photo_annonce']['name'])) {
                    $name = time() ."_". $_FILES['photo_annonce']['name'];
                    $_POST['annonce']['photo_annonce'] = basename($name);
                    $result = move_uploaded_file($tmp_name, "$uploads_dir/$name");
                }

                $_POST['annonce']['id_bud']=$_SESSION['user']['id'];
                $_POST['annonce']['date_pub']=date("Y-m-d");
                
                $test = $manager->insert($_POST['annonce']);

        }
        $helper = new Helper;
        $resultats = $helper->getLibelles();
        $this->show('annonce/post_annonce',["builder" =>$builder, "libelles" =>$resultats[0], "sslibelles" =>$resultats[1], "erreur"=>$erreur]);

    }
}
