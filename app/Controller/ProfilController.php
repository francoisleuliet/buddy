<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\WUsersManager;
use \Manager\ProfilManager;



class ProfilController extends Controller
{

  public function profil(){
//
//
//        $sql = "SELECT profil FROM " . $this->table . "WHERE id = ?";
//
//        $sth = $this->dbh->prepare($sql);
//        $sth->bindValue("?", $id);
//        $sth->execute(array($params["id"]));
//
//        while($value=$sth->fetch()){
//            echo "<h3>" . "Nom : " . "<span>" . $value["nom"] . "</span>" . "</h3>";
//            echo "<h3>" . "Prenom : " . "<span>" . $value["prenom"] . "</span>" . "</h3>";
//            echo "<h3>" . "E-mail : " . "<span>" . $value["email_annonce"] . "</span>" . "</h3>";
//            echo "<h3>" . "Hobby : " . "<span>" . $value["hobby"] . "</span>" . "</h3>";
//        };
//
        $this->show('buddy/profil');
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
