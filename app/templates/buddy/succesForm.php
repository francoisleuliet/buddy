
<?php $this->layout('layout', ['title' => 'Formulaire Validé']) ?>


<?php $this->start('main_content') ?>


<div class="container">

    <h1>Session user ok ;</h1>


    <p> Merci pour votre inscription ! <br/> Formulaire Validé !!!   </p>



    <a alt="redirect index" href="<?php echo $this->url('home') ; ?>"><input type="button" alt="index" value="index" class="btn-primary" id="sucLog" ></a>






</div><!-- /container -->

<?php $this->stop('main_content') ?>