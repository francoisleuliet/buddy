<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $this->e($title) ?></title>
        <link rel="shortcut icon" href="">


        <!-- Bootstrap Core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- Buddy CSS -->

        <link href="<?php echo $this->assetUrl('css/Buddy.css')?>" rel="stylesheet">

        <!--login-->
        <link href="<?php echo $this->assetUrl('css/login.css')?>" rel="stylesheet">

        <!--[if IE]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>
    
    <body>
       
        <!-- HEADER -->
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">MyBuddy</a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo $this->url('index') ; ?>">Accueil</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="<?php echo $this->url('inscription') ; ?>">Inscription</a></li>
                            <li><a href="#" data-toggle="dropdown" class=" dropdown dropdown-toggle">Connexion <b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                    <!-- LOGIN CONNEXION -->                         
                                    <div class="card card-container">

                                        <img id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/profil.jpg')?>" />
                                        <p id="profile-name" class="profile-name-card" name="login[username]"></p>

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

                                        </form><!-- /form -->

                                    </div><!-- /.END LOGIN CONNEXION -->

                                </ul></li>

                        </ul>
                    </div><!--.nav-collapse -->
                </div>
            </nav>
        </header><!-- /.END HEADER -->
        
                <aside class="bckAside"><?= $this->section('aside_content') ?></aside>


        <div class="container">
                
        <main>
        <section>     
            <?= $this->section('main_content') ?>
            <?= $this->section('inscription') ?>
        </section>

        <a href="<?= $this->url('buddy/create') ?>">Ecrire un post</a> | 
        <a href="<?= $this->url('register') ?>">Register</a> | 
        <a href="<?= $this->url('login') ?>">Login</a> | 
        <a href="<?= $this->url('logout') ?>">Logout</a>
        
        </main>

        <footer>


        </footer>


        </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>