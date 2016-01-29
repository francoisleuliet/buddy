<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\WUsersManager;
use \Manager\ProfilManager;



class ProfilController extends Controller
{

    //--------------------------------------- RECUPERATION DU PROFIL ------------------------------------------------
    
  public function profil($id){

      $manager = new ProfilManager();
      $manager->setTable('profil');
      $profil = $manager->find($id);
      
      
      $this->show('buddy/profil', ['profil' => $profil]);
   }
    //--------------------------------------- PROFIL UPDATE ------------------------------------------------
}