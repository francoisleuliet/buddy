<?php $this->layout('layout', ['title' => 'Rechercher un buddy']) ?>

<?php $this->start('search_content') ?>

<?= $builder->open()->get()->addClass('form-horizontal')->attribute('role', "form"); ?>


<div class="bg_search container-fluid">
    <div class="search col-sm-10 col-md-offset-1">
        
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4">
                        <select class="form-control" id='cat'>
                            <?php
                            foreach( $libelles as $libelle) {
                                echo '<option value="' . $libelle['id'] . '">' . $libelle['libelle'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" id='sscat'>
                            <?php
                            foreach( $sslibelles as $sslibelle) {
                                echo '<option value="' . $sslibelle['id'] . '" class="'. $sslibelle['id_categorie'] .'" >' . $sslibelle['libelle'] . '</option>';
                            }        
                            ?>
                        </select>
                    </div>
                    <!--<div class="col-sm-3">
<input type="text" class="form-control" id="exampleInputName2" placeholder="Mots clés">
</div>--></div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-9">
                        <?= $builder->text('user_input_autocomplete_address')->addClass('form-control')->placeholder('Où veux-je faire cette activité ?')->id('user_input_autocomplete_address')->required();?>
                    </div>

                    <div class="col-sm-3">
                        <?=$builder->submit('Trouver un buddy')->addClass('cta btn btn-success')->attribute('name', "submit"); ?>
                    </div>
                </div>
            </div>
        
    </div>
</div>   


<?= $builder->text('street_number')->id('street_number')->addClass('form-control'); ?>
<?= $builder->text('route')->id('route')->addClass('form-control'); ?>
<?= $builder->text('locality')->id('locality')->addClass('form-control')->attribute('name', "ville"); ?>
<?= $builder->text('administrative_area_level_1')->id('administrative_area_level_1')->addClass('form-control')->attribute('name', "region"); ?>
<?= $builder->text('administrative_area_level_2')->id('administrative_area_level_2')->addClass('form-control')->attribute('name', "departement"); ?>
<?= $builder->text('postal_code')->id('postal_code')->addClass('form-control')->attribute('name', "code_postal"); ?>



<?= $builder->close(); ?>

<?php $this->stop('search_content') ?>

<?php $this->start('results_content') ?>

<?php if(!empty($resultats)){
    foreach ($resultats as $rows) {
        $adresse_photo = $this->assetUrl('upload/annonce/').$rows['photo_annonce']; ?>        
        <div class="container">
                <div class="row">
                    <div class="liste_annonces listed col-sm-12">
                        <img src="<?= $adresse_photo ?>">
                        <div class="img_right col-sm-10">
                            
                            <h3 class="liste_annonces_title"><a href="<?= $this->url('detail',['id'=>$rows['id']]) ?>"> <?= $rows['titre'] ?></a><br/></h3>
                            <small class="prenom">Par <span class="green"> <?= $rows['prenom'] ?></span> le <?= $rows['date_pub'] ?></small>
                            <small class="localisation">
                            <img src="img/location_icon.svg\">
                                <?= $rows['ville'] . ", " . $rows['departement'] . ", " . $rows['region'] ?>
                            </small>
                        </div>
                </div>    
            </div>    
        </div>;
<?php } } ?>

<?php $this->stop('results_content') ?>


<?php $this->start('javascripts') ?>
<!-- Include Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA3B1ZJ5XVMW7KLQNbEQioEzK92_AmPvxo"></script>
<script src="<?= $this->assetUrl('js/autocomplete.js') ?>"></script>
<script src="<?= $this->assetUrl('js/jquery.chained.js') ?>"></script>
<script src="<?= $this->assetUrl('js/recherche.js') ?>"></script>

<?php $this->stop('javascripts') ?>