<?php

namespace Controller;
use \W\Controller\Controller;
use AdamWathan\Form as Form;
use \Manager\AnnonceManager;
use Helper\Helper;

class AnnonceController extends Controller
{

    public function annonce()
    {
        $builder = new Form\FormBuilder;
        $erreur='';
        $_POST['annonce']['titre']='';
        $_POST['annonce']['description']='';
                
        if(!empty($_POST)) 
        {
                
            if(strlen($_POST['annonce']['titre'])< 3)
                {$corrige[] = 'Le titre doit comporter au moins 3 caractères';
                }

                if(empty($_POST['annonce']['categorie']))
                {$corrige[] = 'Tu dois choisir une catégorie';
                }
                if(strlen($_POST['annonce']['description'])< 10)
                {$corrige[] = 'La description doit comporter au moins 10 caractères';
                }
            
  
            
            if(!empty($corrige)) 
            {
              foreach ($corrige as $val) {
                  $erreur .= $val . "<br/>";
              }; 
                
            } else {
                $manager = new \Manager\AnnonceManager;
                $manager->setTable('annonce');
                debug($_FILES);

                $uploads_dir = 'C:/xampp/htdocs/buddy/upload/annonce';		
                $tmp_name = $_FILES['photo_annonce']['tmp_name'];
                if(!empty($_FILES['photo_annonce']['name'])) {
                    $name = time() ."_". $_FILES['photo_annonce']['name'];
                    $_POST['annonce']['photo_annonce'] = basename($name);
                    $result = move_uploaded_file($tmp_name, "$uploads_dir/$name");
                }

                $_POST['annonce']['id_bud']=$this->getUser('$id');
                $_POST['annonce']['date_pub']=date("Y-m-d");
                debug($_POST['annonce']);
                $test = $manager->insert($_POST['annonce']);
                die($test);

                //$this->redirectToRoute('home');
            
        }
        }

        $helper = new Helper;
        $resultats = $helper->getLibelles();
        $this->show('annonce/annonce',["builder" =>$builder, "libelles" =>$resultats[0], "sslibelles" =>$resultats[1], "erreur"=>$erreur]);


    }
}