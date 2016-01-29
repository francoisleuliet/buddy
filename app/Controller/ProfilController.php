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

    
    public function update(array $data, $id, $stripTags = true)
	{
		if (!is_numeric($id)){
			return false;
		}
		
		$sql = "UPDATE " . $this->table . " SET ";
		foreach($data as $key => $value){
			$sql .= "$key = :$key, ";
		}
		$sql = substr($sql, 0, -2);
		$sql .= " WHERE id = :id";

		$sth = $this->dbh->prepare($sql);
		foreach($data as $key => $value){
			$value = ($stripTags) ? strip_tags($value) : $value;
			$sth->bindValue(":".$key, $value);
		}
		$sth->bindValue(":id", $id);
		return $sth->execute();
	}


}

