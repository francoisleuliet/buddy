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
       <div class="container">
          <div class="content_annonce col-sm-8">
               <div class="header_annonce row">
                   <h2>Qui veut jouer de la trompette ?</h2>
                   <div class="small_container">
                       <small class="prenom">Par <span class="green">Audrey</span> le 21/01/2016</small>
                   
                       <span class="sc_right">Musique > Famille des cuivres</span>
                   </div>
                   <hr/>
               </div>
               
               <article>
                   <p class="annonce_text row">
                       Avis aux buddies !
<br/><br/>
Je cherche quelqu’un avec qui m’entrainer à la trompette que je pratique seule depuis 2 ans.
Si quelqu’un est dans le coin du Vaudreuil, ce serait cool de s’entraîner à 2 !
J’ai un niveau intermédiaire, je cherche donc quelqu’un qui aurait plus ou moins
le même niveau !</p>
             <div class="row">
                  <img src="<?= $this->assetUrl('img/img_buddy.jpg') ?>">
              
                  <small class="localisation"><img src="<?= $this->assetUrl('img/location_icon.svg') ?>"> Val de Reuil, Eure, Normandie</small>
               </article>
               </div>
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
		        	<div class="downHobby row">
		        	    <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-1">
                                <select class="form-control">
                                    <option disabled selected>Catégories</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                              
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-1">
                                <select class="form-control">
                                    <option disabled selected>Sous-Catégories</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>        
		              </div>
		              
		        		<p class="bold">Évalue ton niveau dans ce hobby<br/>en étant le plus juste possible</p>
		        		
                        <div class="rating"> </div>
                        
		        		<input class="ctaBlue" type="submit" value="Ajoute un hobbie">
		        		
		        	</div>

                			
                						
                									
                								
                																		
		        	<div class="form-group">
		        		<div class="col-sm-8">
		        			<button name="submit" type="submit" onClick="validatePassword();" class="cta_inscription btn btn-success">Inscris-toi</button>
		        		</div>
		        	</div>
		        </form>
		    </div>
		</div>
	
<?php $this->stop('main_content') ?>
