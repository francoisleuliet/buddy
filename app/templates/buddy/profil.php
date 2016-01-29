
<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('profil_content') ?>


<h1> MyBuddy <br/><img alt="[photo_utilisateur]" id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/profil.jpg')?>" /><p><span><?php echo $profil["nom"] . " " . $profil["prenom"] ?></span></p></h1>


<ul class="nav nav-tabs">
    <li class="active"><a href="#profil" data-toggle="tab">Mon Profil</a></li>
    <li><a href="#mesBuddy" data-toggle="tab">Mes Buddy</a></li>
    <li><a href="#mesAnnonces" data-toggle="tab">Mes Annonces</a></li>
</ul>

<!-- TAB CONTENT -->
<div class="tab-content">

   <!-- MON PROFIL -->
    <div id="profil" class="tab-pane fade in active">
        <div id="bckColorProfil1"><h3>Mon Profil</h3></div>
        <br/>  
  

            <!-- PHOTO_PROFIL -->
            <div class="form-group">
                <div>
                    <p>Photo de Profil :<img src="<?php echo $this->assetUrl('upload/ ' . $profil["photo_profil"]); ?>"><span><?php echo $profil["photo_profil"] ?></span>
                        
                    </p>
                </div>
            </div>    
 
        
        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="loginForm" name="loginForm">

	<div class="form-group">
		<label for="nom" class="col-sm-2" control-label> Nom : &nbsp; <span><?php echo $profil["nom"] ?></span></label>
	</div>

	<div class="form-group">
		<label for="prenom" class="col-sm-2" control-label>Prenom : &nbsp; <span><?php echo $profil["prenom"] ?></span></label>
	</div>

	<div class="form-group">
		<label for="date_de_naissance" class="col-sm-3" control-label>Date de naissance : &nbsp; <span><?php echo $profil["date_de_naissance"] ?></span></label>
	</div>

	<div class="form-group">		
		<label for="email" class="col-sm-3"  control-label>Email : &nbsp; <span><?php echo $profil["email"] ?></span></label>
	</div>
	
	<div class="form-group">
		<label for="password" class="col-sm-6" control-label>Mot de Passe : &nbsp; <span><?php echo $profil["password"] ?></span></label>
	</div>
	
	<div class="form-group">
		<label for="adresse" class="col-sm-3" control-label>Adresse : &nbsp; <span><?php echo $profil["adresse"] ?></span></label>
	</div>

	<div class="form-group">
		<label for="code_postal" class="col-sm-2"   control-label>Code Postal : &nbsp; <span><?php echo $profil["code_postal"] ?></span></label>
	</div>

	<div class="form-group">
		<label for="ville" class="col-sm-2"   control-label>Ville : &nbsp; <span><?php echo $profil["ville"] ?></span></label>
	</div>

	<div class="form-group">
		<label for="telephone" class="col-sm-2"   control-label>Téléphone : &nbsp; <span><?php echo $profil["telephone"] ?></span></label>
	</div>		
		
	<div class="form-group">
		<label for="mini_bio" class="col-sm-2"   control-label>Mini Bio : &nbsp; <span><?php echo $profil["mini_bio"] ?></span></label>
	</div>

	
	
	<div class="col-sm-12">
                   
                    <p>
                    <input type="button" name="[photo_profil]" value="Modifier" class="btn-success">
<!--                    <input type="submit" id="submit" name="submit" value="Valider" class="btn-info">-->
                    </p>
                </div>

</form>
        
    </div>
    
    <!-- /. END MON PROFIL -->
   
   
    <!-- MES BUDDY -->
    <div id="mesBuddy" class="tab-pane text-center fade">
        <div id="bckColorProfil2"><h3>Mes Buddy</h3></div>
        <section class="mybuddy col-xs-4">
          
           <img alt="[photo_utilisateur]" id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/profil.jpg')?>" />
           
            <p>Nom : <span><?php echo $profil["nom"] ?></span></p>
            <p>Prenom : <span><?php echo $profil["prenom"] ?></span></p>
            <p>E-mail : <span><?php echo $profil["email"] ?></span></p>
            <p>Hobbi : <span><?php echo $profil["hobbi"] ?></span></p>
        
            <a href=""><input href="#" type="button" name="['id_user']" class="btn-large btn-success" value="voir le profil"></a>
            
        </section>
        
        <section class="mybuddy col-xs-4">
           <img alt="[photo_utilisateur]" id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/photo_p1.jpg')?>" />
           <p>Nom : <span><?php echo $profil["nom"] ?></span></p>
            <p>Prenom : <span><?php echo $profil["prenom"] ?></span></p>
            <p>E-mail : <span><?php echo $profil["email"] ?></span></p>
            <p>Hobbi : <span><?php echo $profil["hobbi"] ?></span></p>
            
            <input type="button" name="['id_user']" class="btn-large btn-success" value="voir le profil">
            
        </section>
        
        <section class="mybuddy col-xs-4">
           <img alt="[photo_utilisateur]" id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/photo_p2.jpg')?>" />
             <p>Nom : <span><?php echo $profil["nom"] ?></span></p>
            <p>Prenom : <span><?php echo $profil["prenom"] ?></span></p>
            <p>E-mail : <span><?php echo $profil["email"] ?></span></p>
            <p>Hobbi : <span><?php echo $profil["hobbi"] ?></span></p>
            
            <input type="button" name="['id_user']" class="btn-large btn-success" value="voir le profil">
            <br/>
            
        </section>
        
        <section class="mybuddy col-xs-4">
           <img alt="[photo_utilisateur]" id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/photo_p3.jpg')?>" />
              <p>Nom : <span><?php echo $profil["nom"] ?></span></p>
            <p>Prenom : <span><?php echo $profil["prenom"] ?></span></p>
            <p>E-mail : <span><?php echo $profil["email"] ?></span></p>
            <p>Hobbi : <span><?php echo $profil["hobbi"] ?></span></p>
            
            <input type="button" name="['id_user']" class="btn-large btn-success" value="voir le profil">
            <br/>
            
        </section>
        
        <section class="mybuddy col-xs-4">
           <img alt="[photo_utilisateur]" id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/photo_p4.jpg')?>" />
              <p>Nom : <span><?php echo $profil["nom"] ?></span></p>
            <p>Prenom : <span><?php echo $profil["prenom"] ?></span></p>
            <p>E-mail : <span><?php echo $profil["email"] ?></span></p>
            <p>Hobbi : <span><?php echo $profil["hobbi"] ?></span></p>
            <input type="button" name="['id_user']" class="btn-large btn-success" value="voir le profil">
            <br/>
            
        </section>
        
         <section class="mybuddy col-xs-4">
           <img alt="[photo_utilisateur]" id="profile-img" class="profile-img-card" src="<?php echo $this->assetUrl('img/danger.png')?>" />
              <p>Nom : <span><?php echo $profil["nom"] ?></span></p>
            <p>Prenom : <span><?php echo $profil["prenom"] ?></span></p>
            <p>E-mail : <span><?php echo $profil["email"] ?></span></p>
            <p>Hobbi : <span><?php echo $profil["hobbi"] ?></span></p>
            
            <input type="button" name="['id_user']" class="btn-large btn-success" value="voir le profil">
            <br/>
            
        </section>
    </div>
    <!-- /. END MES BUDDY -->

    <!-- MES ANNONCES -->
    <div id="mesAnnonces" class="tab-pane text-center fade">
        <div id="bckColorProfil3"><h3>Mes Annonces</h3></div>
        <p>Texte du contenu de l'onglet menu 2.</p>
    </div>
    <!-- /. END MES ANNONCES -->

</div>
<!-- /.END TAB CONTENT -->
=======
 <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"></script>
 
<h1> MyBuddy <p><span>["username"]</span></p></h1>


<ul class="nav nav-tabs">
    <li class="active"><i class="fa fa-user fa-2x"></i><a href="#profil" data-toggle="tab">Mon Profil</a></li>
    <li><a href="#menu1" data-toggle="tab">Mes Buddy</a></li>
    <li><a href="#menu2" data-toggle="tab">Mes Annonces</a></li>
</ul>

<div class="tab-content">

    <div id="profil" class="tab-pane fade in active">
          
        <h3>Mon profil</h3><br/>
        
        <p><span>Nom : </span>
        <input type="button" name="nom" value="Modifier" class="btn-success "> <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Prénom : </span>
        <input type="button" name="prenom" value="Modifier" class="btn-success " > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Date de naissance : </span>
        <input type="button" name="date_de_naissance" value="Modifier" class="btn-success"> <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Email : </span>
        <input type="button" name="email" value="Modifier" class="btn-success" > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Adresse : </span>
        <input type="button" name="adresse" value="Modifier" class="btn-success" > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Code Postal : </span>
        <input type="button" name="code_postal" value="Modifier" class="btn-success" > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Ville : </span>
        <input type="button" name="ville" value="Modifier" class="btn-success" > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Téléphone : </span>
        <input type="button" name="telephone" value="Modifier" class="btn-success" > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Mini Bio : </span>
        <input type="button" name="mini_bio" value="Modifier" class="btn-success" > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p><br/>
        
        <p><span>Photo de Profil : </span>
        <input type="button" name="photo_profil" value="Modifier" class="btn-success" > <!-- MODIF --->
        <input type="submit" value="Valider" class="btn-info "> <!-- SUBMIT -->
        </p>
        
    </div>

    <div id="menu1" class="tab-pane text-center fade">
        <h3>Mes Buddy</h3>
        <p>Nom :</p>
        <p>Prenom :</p>
        <p>E-mail :</p>
        <p>Hobbi :</p>
    </div>

    <div id="menu2" class="tab-pane text-center fade">
        <h3>Mes Annonces</h3>
        <p>Texte du contenu de l'onglet menu 2.</p>
    </div>

</div><!-- FIN TAB CONTENT -->
>>>>>>> front

<?php $this->stop('profil_content') ?>