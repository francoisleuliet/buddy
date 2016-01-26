<?php $this->layout('layout', ['title' => 'Poster une annonce']) ?>

<?php $this->start('main_content') ?>

<?= $builder->open()->addClass('form-horizontal')->attribute('role', "form")->multipart(); ?>

<div class="form-group">    
    <?= $builder->label('Titre'); ?>
    <?= $builder->text('titre')->addClass('form-control')->placeholder('Je cherche un partenaire de poker, par exemple...')->required()->attribute('name', "annonce[titre]"); ?>
</div>
<div class="form-group">    
    <?= $builder->label('Catégorie'); ?>
    <select class='form-control' id='cat' name='annonce[categorie]'>
    	<option selected="selected"></option>
        <?php
        foreach( $libelles as $libelle) {
            echo '<option value="' . $libelle['id'] . '">' . $libelle['libelle'] . '</option>';
        }
        ?>
    </select>
</div>

<div class="form-group">    
    <?= $builder->label('Sous-catégorie'); ?>
    <select class='form-control' id='sscat' name='annonce[sous_categorie]' placeholder='choisir une catégorie'>
    	<option selected="selected"></option>
        <?php
        foreach( $sslibelles as $sslibelle) {
            echo '<option value="' . $sslibelle['id'] . '" class="'. $sslibelle['id_categorie'] .'" >' . $sslibelle['libelle'] . '</option>';
        }        
        ?>
    </select>
</div>
<div class="form-group">    
    <?= $builder->label('Lieu'); ?>
    <?= $builder->text('user_input_autocomplete_address')->placeholder('Où vais-je faire cette activité ?')->id('user_input_autocomplete_address')->addClass('form-control')->required(); ?>
</div>
<div class="form-group">   
    <?= $builder->label('Description'); ?>
    <?= $builder->textarea('description')->rows(5)->addClass('form-control')->placeholder('Je décris ce que je cherche...')->attribute('name', "annonce[description]"); ?>
</div>

<div class="form-group">   
    <?= $builder->label('Photo'); ?>
    <?= $builder->file('photo_annonce')->addClass('form-control'); ?>
</div>
<?= $builder->text('street_number')->id('street_number')->addClass('form-control hidden'); ?>
<?= $builder->text('route')->id('route')->addClass('form-control hidden'); ?>
<?= $builder->text('locality')->id('locality')->addClass('form-control hidden')->attribute('name', "annonce[ville]"); ?>
<?= $builder->text('administrative_area_level_1')->id('administrative_area_level_1')->addClass('form-control hidden')->attribute('name', "annonce[region]"); ?>
<?= $builder->text('administrative_area_level_2')->id('administrative_area_level_2')->addClass('form-control hidden')->attribute('name', "annonce[departement]"); ?>
<?= $builder->text('postal_code')->id('postal_code')->addClass('form-control hidden')->attribute('name', "annonce[code_postal]"); ?>
<?= $builder->submit('Enregistre ton annonce')->attribute('name', "submit"); ?>
 <br/>
<?php 

if(isset($erreur)) {
    echo $erreur;
}

?>

<?= $builder->close(); ?>

<?php $this->stop('main_content') ?>

<?php $this->start('javascripts') ?>
<!-- Include Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA3B1ZJ5XVMW7KLQNbEQioEzK92_AmPvxo"></script>
<script src="<?= $this->assetUrl('js/autocomplete.js') ?>"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?= $this->assetUrl('js/jquery.chained.js') ?>"></script>
<script src="<?= $this->assetUrl('js/recherche.js') ?>"></script>
<?php $this->stop('javascripts') ?>

