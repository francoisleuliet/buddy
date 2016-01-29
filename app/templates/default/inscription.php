<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>


<div class="container-fluid">
    <div class="intro">
        <img src="<?= $this->assetUrl('img/logomyBuddy.svg') ?>" alt="logo myBuddy" width="198px" height="202px">
        <h2>Inscris-toi et deviens un buddy</h2>
    </div>
    <div class="signIn col-sm-4 col-sm-offset-4">
        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="loginForm" name="loginForm">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="inscription[nom]" id="nom" placeholder="Nom" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="inscription[prenom]" id="prenom" placeholder="Prénom" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="date" class="form-control" id="date_de_naissance" name="inscription[date_de_naissance]" placeholder="Date de naissance" required>
                </div>
            </div>
            <div class="form-group">				
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" name="inscription[email]" placeholder="E-mail" required>
                </div>

            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirme ton mot de passe" required><span id="erreur" style="display: none;">Les mots de passe sont différents !</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="adresse" name="inscription[adresse]" placeholder="Adresse" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="code_postal" name="inscription[code_postal]" placeholder="Code Postal" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="ville" name="inscription[ville]" placeholder="Ville" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="telephone" name="inscription[telephone]" placeholder="Téléphone" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea class="form-control" rows="5" id="mini_bio" name="inscription[mini_bio]" placeholder="Rédige ta mini-bio et dis nous en plus à propos de toi et tes hobbies." required></textarea>
                </div>
            </div>


            <div class="form-group">
                <div class="uploadPP col-sm-3">
                    <input type="file" name="inscription[photo_profil]"/>
                </div>
                <div class="col-sm-9">
                    <p class="uploadText">
                        <span class="bold">Uploade ta plus belle photo de profil</span><br/>
                        Pense à montrer ton visage sans le cacher
                        sinon ta photo ne sera pas validée !
                    </p>
                    <?php if(isset($messageInsertion)){ echo $messageInsertion;} ?>
                </div>
            </div>
            <hr/>
            <div class="downHobby row">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id='cat' name="hobby[categorie]">
                                <?php
    foreach( $libelles as $libelle) {
        echo '<option value="' . $libelle['id'] . '">' . $libelle['libelle'] . '</option>';
    }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" id='sscat' name="hobby[sous_categorie]">
                                <?php
                                foreach( $sslibelles as $sslibelle) {
                                    echo '<option value="' . $sslibelle['id'] . '" class="'. $sslibelle['id_categorie'] .'" >' . $sslibelle['libelle2'] . '</option>';
                                }        
                                ?>
                            </select>
                        </div>
                        <!--<div class="col-sm-3">
<input type="text" class="form-control" id="exampleInputName2" placeholder="Mots clés">
</div>--></div>
                </div>

            </div>
            <div>

                <p class="bold">Évalue ton niveau dans ce hobby<br/>en étant le plus juste possible</p>

                <select class="form-control" name="hobby[niveau]">
                    <option value="debutant" selected>Débutant</option> 
                    <option value="intermediaire">Intermédiaire</option>
                    <option value="expert">Expert</option>
                </select>



            </div>

            <div class="form-group">
                <div class="col-sm-8">
                    <button name="submit" id="submit" type="submit" class="cta_inscription btn btn-success">Inscris-toi</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $this->stop('main_content') ?>

<?php $this->start('javascripts') ?>
<!-- Include Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA3B1ZJ5XVMW7KLQNbEQioEzK92_AmPvxo"></script>
<script src="<?= $this->assetUrl('js/autocomplete.js') ?>"></script>
<script src="<?= $this->assetUrl('js/jquery.chained.js') ?>"></script>
<script src="<?= $this->assetUrl('js/recherche.js') ?>"></script>


<script>

        $("#submit").on("click", function(e) {
            password = $('#password').val();
            confirm = $('#confirmpassword').val();
            if (password != confirm && password != '' && confirm != '') {
                $("#erreur").show();
                e.preventDefault();
            }
        });
    
        // mécanisme qui efface le message d'erreur quand password == confirm
        
    
    
</script>


<?php $this->stop('javascripts') ?>
