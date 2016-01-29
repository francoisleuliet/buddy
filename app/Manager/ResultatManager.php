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
        
        

        $sql = "SELECT a.id, a.categorie, a.sous_categorie, a.titre, a.region, a.departement, a.ville, a.date_pub, a.photo_annonce, a.id_bud, p.prenom FROM annonce AS a LEFT JOIN profil AS p ON a.id_bud = p.id WHERE categorie LIKE :categorie ". $sql_ss_cat . $sql_lieu;

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
    
    public function afficheDetail($id, $orderBy = "", $orderDir = "ASC"){
       
        $sql = "SELECT a.id, a.categorie, a.sous_categorie, a.titre, a.description, a.region, a.departement, a.ville, a.photo_annonce, a.id_bud, a.date_pub, c.libelle, sc.libelle2 FROM annonce AS a 
        INNER JOIN categorie AS c ON c.id = a.categorie 
        INNER JOIN ss_categorie AS sc ON sc.id = a.sous_categorie 
        WHERE a.id LIKE :id";

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
        $sth->bindValue(":id", $id);
        $sth->execute();
        return $sth->fetch();
       
			}
    
    
    public function detailProfil($id_bud, $orderBy = "", $orderDir = "ASC"){
          
        $sql = "SELECT * FROM profil WHERE id LIKE :id";

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
        $sth->bindValue(":id", $id_bud);
        $sth->execute();
        return $sth->fetch();
			}
    
    public function detailqr($id, $orderBy = "", $orderDir = "ASC"){
          
        $sql = "SELECT qp.id_annonce, qp.id, qp.auteur_qp, qp.text_qp, rp.id, rp.auteur_rp, rp.text_rp FROM questions_public AS qp INNER JOIN reponses_public AS rp ON qp.id_annonce = rp.id_annonce WHERE qp.id_annonce LIKE :id_annonce";

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
        $sth->bindValue(":id_annonce", $id);
        $sth->execute();
        return $sth->fetchAll();
			}
    

    }

