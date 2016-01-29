<?php $this->layout('layout', ['title' => 'Détail']) ?>

<?php $this->start('single_content') ?>

<?php
    echo "DETAILS <br/>";
print_r($detail);
echo '<br/> PROFIL <br/>';
print_r($profil);
print_r($qr);

?>

<div class="container">
    <div class="row">
        <div class="content_annonce col-sm-8">
            <div class="header_annonce">
                <h2><?= $detail['titre'] ?></h2>
                <div class="small_container">
                    <small class="prenom">Par <span class="green"><?= $profil['prenom'] ?></span> le <?= $detail['date_pub'] ?></small>

                    <span class="sc_right"><?= $detail['libelle'] ?> > <?= $detail['libelle2'] ?></span>
                </div>
                <hr/> 
                <article>
                    <p class="main_annonce">
                        <?= $detail['description'] ?>
                    </p>
                    <div class="bottom_annonce">

                        <small class="localisation">
                            <?= $photo = $this->assetUrl('upload/annonce/').$detail['photo_annonce']; ?>   
                            <img src="<?= $photo ?>">
                            <img src="img/location_icon.svg">
                            <?= $detail['ville'] ?>, <?= $detail['departement'] ?>, <?= $detail['region'] ?>
                        </small>
                        <a class="cta_buddy btn btn-success" href="#" role="button">Je veux être buddy</a>
                    </div>
                </article>
            </div> 

            <div class="content_profile col-sm-3 col-sm-offset-1">
                <div class="header_profile">
                    <img src="img/profilPic.png">
                    <p><span class="bold green"><?= $profil['prenom'] ?></span>
                        <br/><span class="bold grey"><?= date("Y")-$profil['date_de_naissance'] ?> ans</span>
                        <br/> <?= $profil['ville'] ?>
                    </p>
                    <div class="rating"> </div>
                </div>
                <div class="main_profile">
                    <p>
                        <?= $profil['mini_bio'] ?>
                    </p>
                </div>
            </div>

        </div>    
    </div>




    <!-- QUESTIONS PUBLIQUES -->

    <div class="questionsPubliques">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Questions publiques</h3>
                    <div class="question listed">
                        <div class="question_buddy">
                            <p>Par <span class="bold green">Matthieu</span> le 
                                <span class="bold grey">22/01/2016</span>
                                <br/><br/>
                                Aesthetic VHS pitchfork viral. Ethical beard narwhal sriracha lo-fi pabst. Lomo tacos food truck bitters, gluten-free fap selvage messenger bag kinfolk humblebrag fashion axe deep v literally artisan. Offal cliche cred, bushwick aesthetic lomo chartreuse gentrify PBR&B. Lumbersexual occupy semiotics swag blog art party +1 twee PBR&B selvage. Selvage put a bird on it poutine, art party twee gastropub vegan gochujang 90's single-origin coffee shabby chic fingerstache bitters. Lo-fi fashion axe DIY, messenger bag viral kitsch dreamcatcher chartreuse gastropub.
                            </p>
                        </div>   
                    </div>

                   
                    <div class="repondre">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="5" id="mini_bio" name="inscription[mini_bio]" placeholder="Tu peux poser ta question à Audrey ici." required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button name="question" type="submit" class="cta_question btn btn-success">Poser une question</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div> 
        </div>    
    </div>












    <?php $this->stop('single_content') ?>




    <?php $this->start('javascripts') ?>


    <?php $this->stop('javascripts') ?>

