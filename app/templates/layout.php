<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/normalize.css') ?>">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styles.css') ?>">

	

</head>
<body>
	<div class="container-fluid">
            <div class="header row">
                <div class="col-sm-12">
                    <a href="<?= $this->url('home') ?>" class="logo"><img src="<?= $this->assetUrl('img/logomyBuddy.svg') ?>" alt="logo myBuddy"></a>
                    <p class="textLogo"><span>my</span>Buddy<span>.fr</span></p>
                    <div class="right">
                        <nav>
                            <ul>
                                <li><a href="<?= $this->url('commentmarche') ?>">Comment ça marche ?</a></li>
                                <li><a href="<?= $this->url('inscription') ?>">Inscription</a></li>
                                <li><a href="#" id="connexion">Connexion</a></li>
                            </ul>
                        </nav>
                        <a class="cta_buddy btn btn-success" href="<?= $this->url('annonce') ?>" role="button">Poster une annonce</a>
                    </div>
                </div>
            </div>
        </div>

        
            <?= $this->section('search_content'); ?>
        
            <?= $this->section('main_content'); ?>
          
        <div class="footer">
            <div class="col-sm-12">
                <a href="#">Comment ça marche ?</a> | <a href="#">Mentions légales</a> | <a href="#">CGU</a> | <a href="#">Contact</a> 
            </div>
        </div>
        <?= $this->section('javascripts') ?>


            
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Connecte-toi</h4>
      </div>
      <div class="modal-body">
        <form action="<?= $this->url('login') ?>" class="form-signin" method="POST">
                                            <span id="reauth-email" class="reauth-email"></span>

                                            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" name="login[email]" required autofocus>
                                            <input type="password" id="inputPassword" class="form-control" name="login[password]" placeholder="Mot de passe" required>

                                            <div class="wrapper">
                                                <span class="group-btn  col-lg-12">     
                                                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="create">Connexion</button>
                                                </span>
                                            </div>

                                            <div id="remember" class="checkbox">

                                                <center><a href="<?php echo $this->url('recoverLogin') ; ?>" class="forgot-password">
                                                    Mot de passe oublié ?
                                                    </a></center> 

                                                <center><a href="<?php echo $this->url('inscription') ; ?>" class="forgot-password">
                                                    S'inscrire ?
                                                    </a></center> 

                                            </div>

                                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $('#connexion').on('click', function() {
    $('#myModal').modal('show');    
    })
    
    </script>
    </body>
</html>