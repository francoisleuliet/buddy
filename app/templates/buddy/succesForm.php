
<?php $this->layout('layout', ['title' => 'Formualire Valider']) ?>


<?php $this->start('main_content') ?>


<div class="container">


<h1>Session user ok ;</h1>

    
    <p> Merci pour votre inscription ! </br> Formualire Valider !!! 
    
    <form action="">
        
        <a alt="redirect index" href="<?php echo $this->url('index') ; ?>"><input type="button" alt="index" value="index" class="btn-primary" id="sucLog" ></a>
        
    </form>
    </p>
    


</div><!-- /container -->

<?php $this->stop('main_content') ?>