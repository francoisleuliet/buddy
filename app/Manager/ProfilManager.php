<?php

namespace Manager;

class ProfilManager extends \W\Manager\Manager
{

    public function getID($email)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":email", $email);
		$sth->execute();

		return $sth->fetch();
	}

}
