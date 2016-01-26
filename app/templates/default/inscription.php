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
		        			<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirme ton mot de passe" required>
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
		        		</div>
		        	</div>
		        	<hr/>
<!--
		        	<div class="form-group">
		        			<div class="uploadPP col-sm-3">
                                <input type="file" name="inscription[photo_profil]"/>
                           </div> 
                           <p class="uploadText col-sm-9">
                               <span class="bold">Uploade ta plus belle photo de profil</span><br/>
                               Pense à montrer ton visage sans le cacher
sinon ta photo ne sera pas validée !
                           </p>
                	</div>	
-->

                			
                						
                									
                												
                																		
		        	<div class="form-group">
		        		<div class="col-sm-offset-1 col-sm-10">
		        			<button name="submit" type="submit" onClick="validatePassword();" class="btn btn-default">Valider mon inscription</button>
		        		</div>
		        	</div>
		        </form>
		    </div>
		</div>
	
<?php $this->stop('main_content') ?>
