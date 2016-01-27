
<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

<?php


function afficherProfil($pdo) {
		$sql = 'SELECT * FROM `profil`';
		$stmt = $pdo->query($sql);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
$profils = afficherProfil($pdo);
?>

<br>
<?php foreach($profils as $profil) : ?>
<?php echo $profil['nom'],$profil['prenom'],$profil['email'] ?>
<div>Nom : </div>
<div>Prénom : </div>
<div>Date de naissance : </div>
<div>Email : </div>
<div>Adresse : </div>
<div>Code Postal : </div>
<div>Ville : </div>
<div>Téléphone : </div>
<div>Mini Bio : </div>
<div>Photo de Profil : </div>

<?php $this->stop('main_content') ?>