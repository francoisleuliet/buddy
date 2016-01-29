
<?php $this->layout('layout', ['title' => 'Connexion reussie']) ?>


<?php $this->start('main_content') ?>


<div class="container">


<h1>Session user ok ;</h1>

<section>
    
    <p> <span>"username"</span> de la session   </p>
    
    <form action="">
        
        <a alt="redirect index" href="<?php echo $this->url('index') ; ?>"><input type="button" alt="index" value="index" class="btn-primary" id="sucLog" ></a>
        
    </form>
  
    
</section>

</div><!-- /container -->

<?php $this->stop('main_content') ?>