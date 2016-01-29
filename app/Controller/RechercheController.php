<?php

namespace Controller;

use \W\Controller\Controller;
use AdamWathan\Form as Form;
use Helper\Helper;

class RechercheController extends Controller
{

    public function recherche()
    {
        $builder = new Form\FormBuilder;
        $helper = new Helper;
        $les_libelles = $helper->getLibelles();
        if (isset($_GET['submit'])) {

            $manager = new \Manager\ResultatManager;
            $manager->setTable('annonce');

            if (!empty($_GET['categorie'])){
                $categorie = $_GET['categorie'];
            } else {
                $categorie = "";
            }
            if (!empty($_GET['sous_categorie'])){
                $sous_categorie = $_GET['sous_categorie'];
            } else {
                $sous_categorie = "";
            }
            if (!empty($_GET['region'])){
                $region = $_GET['region'];
            } else {
                $region = "";
            }
            if (!empty($_GET['departement'])){
                $departement = $_GET['departement'];
            } else {
                $departement = "";
            }  
            if (!empty($_GET['ville'])){
                $ville = $_GET['ville'];
            } else {
                $ville = "";
            } 
            $resultats = $manager->afficheResult($categorie, $sous_categorie, $ville, $departement, $region);
            $this->show('recherche/recherche',["builder" =>$builder, "libelles" =>$les_libelles[0], "sslibelles" =>$les_libelles[1], 'resultats' => $resultats]);
        }

        $this->show('recherche/recherche',["builder" =>$builder, "libelles" =>$les_libelles[0], "sslibelles" =>$les_libelles[1]]);
  }

    public function detail($id) {
        $manager = new \Manager\ResultatManager;
        $detail = $manager->afficheDetail($id);
        $profil = $manager->detailProfil($detail['id_bud']);
        $qr = $manager->detailqr($id);
        $this->show('detail/detail',['detail'=>$detail, 'profil'=>$profil, 'qr'=>$qr]);
        
    }


}
