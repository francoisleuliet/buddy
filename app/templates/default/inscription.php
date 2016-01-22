<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
	<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script>

<script>
function validatePassword(){ 
 var validator = $("#loginForm").validate({
  rules: {                   
   password :"required",
   confirmpassword :{
    equalTo: "#password"
      }  
     },                             
     messages: {
      password :" Enter Password",
      confirmpassword :" Le Mot de Passe est différent !"
     }
 });
 if(validator.form()){
 }
}
 </script>

		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="loginForm" name="loginForm">
			<div class="form-group">
				<label for="nom" class="col-sm-2 control-label">Nom</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="inscription[nom]" id="nom" placeholder="nom" required>
				</div>
			</div>
			<div class="form-group">
				<label for="prenom" class="col-sm-2 control-label">Prénom</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="inscription[prenom]" id="prenom" placeholder="prenom" required>
				</div>
			</div>
			<div class="form-group">
				<label for="date_de_naissance" class="col-sm-2 control-label">Date de naissance</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="date_de_naissance" name="inscription[date_de_naissance]" placeholder="Date de naissance" required>
				</div>
			</div>
			<div class="form-group">				
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-5">
					<input type="email" class="form-control" id="email" name="inscription[email]" placeholder="email" required>
				</div>

			</div>
			<div class="form-group">
				<label for="mot_de_passe" class="col-sm-2 control-label">Mot de Passe</label>
				<div class="col-sm-5">
					<input type="password" class="form-control" id="password" name="password" placeholder="Choisis ton mot de passe" required>
				</div>
			</div>
			<div class="form-group">
				<label for="mot_de_passe" class="col-sm-2 control-label">Confirmer Mot de Passe</label>
				<div class="col-sm-5">
					<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirmes ton mot de passe" required>
				</div>
			</div>
			<div class="form-group">
				<label for="adresse" class="col-sm-2 control-label">Adresse</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="adresse" name="inscription[adresse]" placeholder="adresse" required>
				</div>
			</div>
			<div class="form-group">
				<label for="code_postal" class="col-sm-2 control-label">Code Postal</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="code_postal" name="inscription[code_postal]" placeholder="Code Postal" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ville" class="col-sm-2 control-label">Ville</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="ville" name="inscription[ville]" placeholder="Ville" required>
				</div>
			</div>
			<div class="form-group">
				<label for="telephone" class="col-sm-2 control-label">Téléphone</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="telephone" name="inscription[telephone]" placeholder="Téléphone" required>
				</div>
			</div>
			<div class="form-group">
				<label for="mini_bio" class="col-sm-2 control-label">Mini Bio</label>
				<div class="col-sm-5">
					<textarea class="form-control" rows="3" id="mini_bio" name="inscription[mini_bio]" placeholder="Mini Bio" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="file" name="inscription[photo_profil]" />
        		</div>
        	</div>		
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button name="submit" type="submit" onClick="validatePassword();" class="btn btn-default">Valider mon inscription</button>
				</div>
			</div>
		</form>
	
<?php $this->stop('main_content') ?>
