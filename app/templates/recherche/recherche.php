<?php $this->layout('layout', ['title' => 'Rechercher un buddy']) ?>

<?php $this->start('search_content') ?>

<?= $builder->open()->get()->addClass('form-horizontal')->attribute('role', "form"); ?>


<div class="form-group">    
    <?= $builder->label('Catégorie'); ?>

    <!--    <?php //echo $builder->select('libelles', $libelles)->addClass('form-control'); ?>-->

    <select class='form-control' id='cat' name='categorie'>
        <?php
        foreach( $libelles as $libelle) {
            echo '<option value="' . $libelle['id'] . '">' . $libelle['libelle'] . '</option>';
        }
        ?>
    </select>

</div>


<div class="form-group">    
    <?= $builder->label('Sous-catégorie'); ?>
    <select class='form-control' id='sscat' name='sous_categorie'>
        <?php

        foreach( $sslibelles as $sslibelle) {
            echo '<option value="' . $sslibelle['id'] . '" class="'. $sslibelle['id_categorie'] .'" >' . $sslibelle['libelle'] . '</option>';

        }        

        ?>
    </select>
</div>

<div class="form-group">    
    <?= $builder->label('Lieu'); ?>
    <?= $builder->text('user_input_autocomplete_address')->placeholder('Où veux-je faire cette activité ?')->id('user_input_autocomplete_address')->addClass('form-control')->required(); ?>
</div>

<?= $builder->text('street_number')->id('street_number')->addClass('form-control hidden'); ?>
<?= $builder->text('route')->id('route')->addClass('form-control hidden'); ?>
<?= $builder->text('locality')->id('locality')->addClass('form-control hidden')->attribute('name', "ville"); ?>
<?= $builder->text('administrative_area_level_1')->id('administrative_area_level_1')->addClass('form-control hidden')->attribute('name', "region"); ?>
<?= $builder->text('administrative_area_level_2')->id('administrative_area_level_2')->addClass('form-control hidden')->attribute('name', "departement"); ?>
<?= $builder->text('postal_code')->id('postal_code')->addClass('form-control hidden')->attribute('name', "code_postal"); ?>
<?= $builder->submit('Trouver un buddy')->attribute('name', "submit"); ?>

<?= $builder->close(); ?>

<?php $this->stop('search_content') ?>

<?php $this->start('results_content') ?>

<?php if(!empty($resultats)){
    foreach ($resultats as $rows) {
        echo '************ <br/>';
        echo $rows['titre'] .'<br/>';
        echo $rows['description'] .'<br/>';
        echo $rows['date_pub'] .'<br/>';
        $adresse_photo = "../../../upload/annonce/" . $rows['photo_annonce'];
        echo "<img src=$adresse_photo width='250' height='150'>";
        echo $rows['region'] .'> ';
        echo $rows['departement'] .'> ';
        echo $rows['ville'] .'<br/>';    
    } 
    
}?>

<?php $this->stop('results_content') ?>


<?php $this->start('javascripts') ?>
<!-- Include Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA3B1ZJ5XVMW7KLQNbEQioEzK92_AmPvxo"></script>
<script src="<?= $this->assetUrl('js/autocomplete.js') ?>"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?= $this->assetUrl('js/jquery.chained.js') ?>"></script>
<script src="<?= $this->assetUrl('js/recherche.js') ?>"></script>

<?php $this->stop('javascripts') ?>

