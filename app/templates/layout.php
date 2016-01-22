<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/normalize.css') ?>">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styles.css') ?>">
</head>
<body>
	<div class="container-fluid">
            <div class="header row">
                <div class="col-md-12">
                    <a href="<?= $this->url('home') ?>" class="logo"><img src="<?= $this->assetUrl('img/logomyBuddy.svg') ?>" alt="logo myBuddy"></a>
                    <p class="textLogo"><span>my</span>Buddy<span>.fr</span></p>
                    <div class="right">
                        <nav>
                            <ul>
                                <li><a href="#">Comment ça marche ?</a></li>
                                <li><a href="<?= $this->url('inscription') ?>">Inscription</a></li>
                                <li><a href="#">Connexion</a></li>
                            </ul>
                        </nav>
                        <a class="cta_buddy btn btn-success" href="#" role="button">Poster une annonce</a>
                    </div>
                </div>
            </div>
    </div>
         <?= $this->section('main_content'); ?>   
        <div class="footer">
                <div class="col-md-12">
                    <a href="#">Comment ça marche ?</a> | <a href="#">Mentions légales</a> | <a href="#">CGU</a> | <a href="#">Contact</a> 
                </div>
            </div>
</body>
</html>