
<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

<?php

try {
$bdd = new PDO('mysql:host=localhost;dbname=buddy;charset=utf8', 'root', ''); 
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<br>
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