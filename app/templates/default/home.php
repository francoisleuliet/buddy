<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
<div class="bg row">
    <h1>Vous avez une passion,
        <br/><small>partagez-la</small></h1>
</div>
<?= $builder->open()->addClass('form-horizontal')->attribute('role', "form")->action('/recherche')->get(); ?>

<div class="bg_search container-fluid">
    <div class="search col-sm-10 col-md-offset-1">
        <form class="inline">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4">
                        <select class="form-control" id='cat' name='categorie'>
                            <?php
                            foreach( $libelles as $libelle) {
                                echo '<option value="' . $libelle['id'] . '">' . $libelle['libelle'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" id='sscat'name='sous_categorie'>
                            <?php
                            foreach( $sslibelles as $sslibelle) {
                                echo '<option value="' . $sslibelle['id'] . '" class="'. $sslibelle['id_categorie'] .'" >' . $sslibelle['libelle2'] . '</option>';
                            }        
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-9">
                        <?= $builder->text('user_input_autocomplete_address')->addClass('form-control')->placeholder('Où veux-je faire cette activité ?')->id('user_input_autocomplete_address')->required();?>
                    </div>
                    
    
<?= $builder->text('street_number')->id('street_number')->addClass('form-control hidden'); ?>
<?= $builder->text('route')->id('route')->addClass('form-control hidden'); ?>
<?= $builder->text('locality')->id('locality')->addClass('form-control hidden')->attribute('name', "ville"); ?>
<?= $builder->text('administrative_area_level_1')->id('administrative_area_level_1')->addClass('form-control hidden')->attribute('name', "region"); ?>
<?= $builder->text('administrative_area_level_2')->id('administrative_area_level_2')->addClass('form-control hidden')->attribute('name', "departement"); ?>
<?= $builder->text('postal_code')->id('postal_code')->addClass('form-control hidden')->attribute('name', "code_postal"); ?>

                    <div class="col-sm-3">
                        <?=$builder->submit('Trouver un buddy')->addClass('cta btn btn-success')->attribute('name', "submit"); ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>   

<?= $builder->close(); ?>


<div class="container">
    <div class="annonces col-sm-12">
        <div class="col-sm-4">
            <img src="<?= $this->assetUrl('img/sugg1.jpg') ?>" class="img-responsive" alt="Responsive image">
        </div>
        <div class="col-sm-4">
            <img src="<?= $this->assetUrl('img/sugg2.jpg') ?>" class="img-responsive" alt="Responsive image">
        </div>
        <div class="col-sm-4">
            <img src="<?= $this->assetUrl('img/sugg3.jpg') ?>" class="img-responsive" alt="Responsive image">
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('javascripts') ?>
<!-- Include Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA3B1ZJ5XVMW7KLQNbEQioEzK92_AmPvxo"></script>
<script src="<?= $this->assetUrl('js/autocomplete.js') ?>"></script>
<script src="<?= $this->assetUrl('js/jquery.chained.js') ?>"></script>
<script src="<?= $this->assetUrl('js/recherche.js') ?>"></script>

<?php $this->stop('javascripts') ?>
