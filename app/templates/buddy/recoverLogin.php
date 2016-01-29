
<?php $this->layout('layout', ['title' => 'Login Oublié']) ?>

<?php $this->start('main_content') ?>

<div class="container">

    <!-- RECOVERY PASSWORD -->   
    
    <img id="profile-img2" class="profile-img-card2" src="<?php echo $this->assetUrl('img/mail.png')?>" />
    <p id="profile-name" class="profile-name-card" name="login[username]">Mot De Passe Oublié.</p>
    
    <div class="card2 card-container2">
        <form class="form-signin" action="" method="POST">

            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" name="email" required autofocus>
            <div class="wrapper">
                <span class="group-btn  col-lg-12">     
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="create">valider</button>
                </span>
            </div>

        </form><!-- /form -->
    </div>
    
</div>

    <?php $this->stop('main_content') ?>


