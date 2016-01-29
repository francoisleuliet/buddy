<?php
namespace Controller;
use \W\Controller\Controller;
class ResultatController extends Controller
{
    public function resultat_single()
    {
        $manager = new \Manager\ResultatManager;
        $manager->setTable('annonce');
        
        $resultats->afficheResult();
        $this->show('default/resultat_single');
    }
}