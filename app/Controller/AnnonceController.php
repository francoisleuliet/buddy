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

        $obligatoire=array('annonce[titre]','annonce[categorie]','annonce[description]');
        if(!empty($_POST)) 
        {
            $retour=1;
            foreach ($obligatoire as $val)
            {
               if(strlen($_POST['annonce[titre]'] < 3))
               {$corrige[] = 'Le titre doit comporter au moins 3 caractères';
               $retour=0;
               } 
            }
            
            
            
        }
        
        if(isset($_POST['submit'])) {


            $errors[]='';



            if(strlen($_POST['titre'] < 3)){$errors[] = 'Le titre doit comporter au moins 3 caractères';}
            if(empty($_POST['annonce[categorie]'])){$errors[] = 'Tu dois choisir une catégorie';}
            if(strlen($_POST['annonce[description]'] < 10)){$errors[] = 'La description doit comporter au moins 10 caractères';}

            print_r($errors);


            if(empty($errors)){ 
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
            //            else print_r($errors);
        }

        $helper = new Helper;
        $resultats = $helper->getLibelles();
        $this->show('annonce/annonce',["builder" =>$builder, "libelles" =>$resultats[0], "sslibelles" =>$resultats[1]]);


    }
}