
<?php $this->layout('layout', ['title' => 'Login Oublié']) ?>

<?php $this->start('main_content') ?>

<div class="container">
<div class="row">
    <div class="col-lg-12">
    
    

    <!-- RECUPERATION LOGIN -->                         
    <div class="card2">

        <img id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/mail.png')?>" />
        
        <p><img id="log_danger" src="<?php echo $this->assetUrl('img/danger.png')?>" />  Vous avez oublié votre mot de passe :<br/>
            Veuillez rentré votre Email pour redéfinir votre Mot de passe;   
               </p>
                
        <p id="profile-name" class="profile-name-card" name="myform[username]"></p>

        <form class="form-signin" method="POST">
            <span id="reauth-email" class="reauth-email"></span>

            <input type="email" id="inputEmail" class="form-control " placeholder="Adresse Email" name="myform[email]" required autofocus>

            <div class="wrapper">
                <span class="group-btn  col-lg-12">     
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="create">Envoyer</button>
                </span>
            </div>

        </form><!-- /form -->

    </div><!-- /.END RECUPERATION LOGIN  -->
    </div>
    </div>

</div>

<?php $this->stop('main_content') ?>


