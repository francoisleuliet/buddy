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


        $sql = "SELECT * FROM " . $this->table . "WHERE id = ?";

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue("?", $id);
        $sth->execute(array($params["id"]));

        while($value=$sth->fetch()){
            echo "<h3>" . "Nom : " . "<span>" . $value["nom"] . "</span>" . "</h3>";
            echo "<h3>" . "Prenom : " . "<span>" . $value["prenom"] . "</span>" . "</h3>";
            echo "<h3>" . "E-mail : " . "<span>" . $value["email_annonce"] . "</span>" . "</h3>";
            echo "<h3>" . "Hobby : " . "<span>" . $value["hobby"] . "</span>" . "</h3>";
        };

        $this->show('profil/profil');
    }


}
