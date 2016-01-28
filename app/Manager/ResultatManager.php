<?php 
namespace Manager;

class ResultatManager extends \W\Manager\Manager 
{

    public function afficheResult($categorie, $sous_categorie, $ville, $departement, $region, $orderBy = "", $orderDir = "ASC"){
          
        if(!empty($sous_categorie)){
            $sql_ss_cat = 'AND sous_categorie LIKE :sous_categorie ';   
        } else {$sql_ss_cat = '';}
        if(!empty($ville)){
            $sql_lieu = 'AND ville LIKE :ville';
            $lieu = "ville";
            $value = $ville;
        } elseif(!empty($departement)){
            $sql_lieu = 'AND departement LIKE :departement';
            $lieu = "departement";
            $value = $departement;
        } elseif(!empty($region)){
            $sql_lieu = 'AND region LIKE :region';
            $lieu = "region";
            $value = $region;  
        } else{$sql_lieu = '';}
        
        

        $sql = "SELECT * FROM annonce WHERE categorie LIKE :categorie ". $sql_ss_cat . $sql_lieu;

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
       
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":categorie", $categorie);
        $sth->bindValue(":sous_categorie", $sous_categorie);
        $sth->bindValue(":".$lieu, $value);
        $sth->execute();
        return $sth->fetchAll();
       
  
			}

    }

