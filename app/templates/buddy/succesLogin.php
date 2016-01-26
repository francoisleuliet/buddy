
<?php $this->layout('layout', ['title' => 'Connexion reussite']) ?>

<?php $this->start('aside_content') ?>

<img src="<?php echo $this->assetUrl('img/b3.jpg')?>" alt="back ground Login oublié"> class="bckAside"

<?php $this->stop('aside_content') ?>

<?php $this->start('main_content') ?>


<div class="container">


<h1>Session user ok ;</h1>

<section>
    
    <p> <span>"username"</span> de la session 
    
    <form action="">
        
        <a alt="redirect index" href="<?php echo $this->url('index') ; ?>"><input type="button" alt="index" value="index" class="btn-primary" id="sucLog" ></a>
        
    </form>
    </p>
    
</section>

</div><!-- /container -->

<?php $this->stop('main_content') ?>