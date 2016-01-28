<?php 
namespace Manager;

class RechercheManager extends \W\Manager\Manager 
{

    
    public function findCat($orderBy = "", $orderDir = "ASC")
	{

		$sql = "SELECT DISTINCT id, libelle FROM ".$this->table;
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
		$sth->execute();

		return $sth->fetchAll();
	}
    
    
    
    public function findSsCat($orderBy = "", $orderDir = "ASC")
	{
        
		$sql = "SELECT DISTINCT id_categorie, id, libelle FROM ss_categorie";
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
		$sth->execute();

		return $sth->fetchAll();
	}
    
    
}
