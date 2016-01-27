<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
<div class="bg row">
    <h1>Vous avez une passion,
    <br/><small>partagez-la</small></h1>
</div>
<?= $builder->open()->addClass('form-horizontal')->attribute('role', "form"); ?>

<div class="bg_search container-fluid">
    <div class="search col-sm-10 col-md-offset-1">
        <form class="inline">
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
        </form>
    </div>
</div>   

<?= $builder->close(); ?>
        <!--<div class="bg_search container-fluid">
                <div class="search col-sm-10 col-md-offset-1">
                    <form class="inline">
                        <div class="form-group">
                           <div class="row">
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Mots clés">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <input class="cta btn btn-success" type="submit" value="Rechercher">
                            </div>
                        </div>
                    </form>
                </div>
        </div>-->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
<script src="<?= $this->assetUrl('js/jquery.chained.js') ?>"></script>
<script src="<?= $this->assetUrl('js/recherche.js') ?>"></script>

<?php $this->stop('javascripts') ?>
