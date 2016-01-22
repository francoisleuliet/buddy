
<?php $this->layout('layout', ['title' => 'Login Oublié']) ?>

<?php $this->start('main_content') ?>

<div class="container">

    <!-- LOGIN CONNEXION -->   
                          
    <div class="card card-container">

        <img id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/profil.jpg')?>" />
        <p id="profile-name" class="profile-name-card" name="login[username]"></p>

        <form class="form-signin" method="POST">
           
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" name="login[email]" required autofocus>
            <input type="password" id="inputPassword" class="form-control" name="login[password]" placeholder="Mot de passe" required>

            <div class="wrapper">
                <span class="group-btn  col-lg-12">     
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="create">Connexion</button>
                </span>
            </div>

            <div id="remember" class="checkbox">
                <!-- Balise CENTER OBSOLETE!!!! --> <center><a href="<?php echo $this->url('login') ; ?>" class="forgot-password">
                    Mot de passe oublié ?
                    </a></center> <!-- Balise CENTER OBSOLETE!!!! -->

                <center><a href="<?php echo $this->url('inscription') ; ?>" class="forgot-password">
                    S'inscrire ?
                    </a></center> <!-- Balise CENTER OBSOLETE!!!! -->
            </div>

        </form><!-- /form -->
    </div>

    <?php $this->stop('main_content') ?>


