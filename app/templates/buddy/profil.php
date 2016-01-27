
<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('profil_content') ?>

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
        <p><span>Nom : </span><input type="button" value="Modifier" class="btn-success "></p><br/>
        <p><span>Prénom : </span><input type="button" value="Modifier" class="btn-success " ></p><br/>
        <p><span>Date de naissance : </span><input type="button" value="Modifier" class="btn-success"></p><br/>
        <p><span>Email : </span><input type="button" value="Modifier" class="btn-success" ></p><br/>
        <p><span>Adresse : </span><input type="button" value="Modifier" class="btn-success" ></p><br/>
        <p><span>Code Postal : </span><input type="button" value="Modifier" class="btn-success" ></p><br/>
        <p><span>Ville : </span><input type="button" value="Modifier" class="btn-success" ></p><br/>
        <p><span>Téléphone : </span><input type="button" value="Modifier" class="btn-success" ></p><br/>
        <p><span>Mini Bio : </span><input type="button" value="Modifier" class="btn-success" ></p><br/>
        <p><span>Photo de Profil : </span><input type="button" value="Modifier" class="btn-success" ></p>
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

<?php $this->stop('profil_content') ?>