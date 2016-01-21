<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?= $this->e($title) ?></title>
        <!-- Bootstrap Core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Buddy CSS -->

        <!--login-->
        <link href="<?php echo $this->assetUrl('css/login.css')?>" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <header>
                <h1>LOL</h1>
            </header>

            <section>     
                <?= $this->section('main_content') ?>
            </section>
            <a href="<?= $this->url('create') ?>">Ecrire un post</a> | 
            <a href="<?= $this->url('register') ?>">Register</a> | 
            <a href="<?= $this->url('login') ?>">Login</a> | 
            <a href="<?= $this->url('logout') ?>">Logout</a>
            <footer>
            </footer>
        </div>
    </body>
</html>