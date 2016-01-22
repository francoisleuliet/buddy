<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
<div class="bg row">
                <h1>Vous avez une passion,
                    <br/><small>partagez-la</small></h1>
            </div>
        <div class="bg_search container-fluid">
                <div class="search col-md-10 col-md-offset-1">
                    <form class="inline">
                        <div class="form group">
                           <div class="row">
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Mots clés">
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="form group">
                           <div class="row">
                                <div class="col-md-9">
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
        </div>
        <div class="container">
            <div class="annonces col-md-12">
                <div class="col-md-4">
                    <img src="<?= $this->assetUrl('img/sugg1.jpg') ?>" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-md-4">
                    <img src="<?= $this->assetUrl('img/sugg2.jpg') ?>" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-md-4">
                    <img src="<?= $this->assetUrl('img/sugg3.jpg') ?>" class="img-responsive" alt="Responsive image">
                </div>
            </div>
        </div>
	
<?php $this->stop('main_content') ?>
