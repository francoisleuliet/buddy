<?php 
namespace Manager;
class ResultatManager extends \W\Manager\Manager 
{
    public function afficheResult($orderBy = "", $orderDir = "ASC"){
        
    
	if (isset($_POST['submit'])) {
		if (!empty($_GET['sous_categorie'])){
			$sous_categorie = " AND sous_categorie LIKE " . $_GET['sous_categorie'];
		} else {
			$sous_categorie = "";
		}
		if (!empty($_GET['region'])){
			$region = " AND region LIKE '" . $_GET['region'] . "'";
		} else {
			$region = "";
		}
		if (!empty($_GET['departement'])){
			$departement = " AND departement LIKE " . $_GET['departement'];
		} else {
			$departement = "";
		}  
        
        if (!empty($_GET['code_postal'])){
			$code_postal = " AND code_postal LIKE " . $_GET['code_postal'];
		} else {
			$code_postal = "";
		} 
        
        if (!empty($_GET['ville'])){
			$ville = " AND ville LIKE " . $_GET['ville'];
		} else {
			$ville = "";
		} 
        
        $sql = "SELECT * FROM annonce WHERE categorie LIKE :categorie" . $sous_categorie . $region . $departement . $code_postal . $ville;
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
        $sth->bindValue(':categorie', $params['categorie'], PDO::PARAM_STR);
		$sth->execute();
		return $sth->fetchAll();
        
        
      
        
        
        
     
    }
    
    
    
    
    
}