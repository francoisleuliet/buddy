<?php 
namespace Manager;

class ResultatManager extends \W\Manager\Manager 
{

    public function afficheResult($categorie, $sous_categorie, $ville, $orderBy = "", $orderDir = "ASC"){

        if (!empty($sous_categorie)){
            $sql_sous_categorie = " AND sous_categorie LIKE :sous_categorie ";
        } else {
            $sql_sous_categorie = "";
        }
//
//        if (!empty($region)){
//            $region = " AND region LIKE :region";
//        } else {
//            $region = "";
//        }
//
//        if (!empty($departement)){
//            $departement = " AND departement LIKE :departement";
//        } else {
//            $departement = "";
//        }  
//
//        if (!empty($code_postal)){
//            $code_postal = " AND code_postal LIKE :code_postal";
//        } else {
//            $code_postal = "";
//        } 

        if (!empty($ville)){
            $sql_ville = " AND ville LIKE :ville";
        } else {
            $sql_ville = "";
        } 


        $sql = "SELECT * FROM annonce WHERE categorie LIKE '8' AND ville LIKE 'Vernon'" . $sql_sous_categorie . $sql_ville;

        if (!empty($orderBy)){

            //sécurisation des paramètres, pour éviter les injections SQL
            if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
                die("invalid orderBy param");
            }
            $orderDir = strtoupper($orderDir);
            if($orderDir != "ASC" && $orderDir != "DESC"){
                die("invalid orderDir param");
            }

            $sql .= " ORDER BY $orderBy $orderDir";
        }
       
//        $sth = $this->dbh->prepare($sql);
//        $sth->bindValue(":categorie", "8");
//        $sth->bindValue(":sous_categorie", $sous_categorie);
//        $sth->bindValue(':region', $region);
//        $sth->bindValue(':departement', $departement);
//        $sth->bindValue(':code_postal', $code_postal);
        $sth->bindValue(":ville", $ville);
        debug($sql);
        $sth->execute();
        return $sth->fetchAll();
       







    }





}
