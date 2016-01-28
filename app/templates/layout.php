<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
</head>
<body>
	<div class="container">
		<header>
			<h1><?= $this->e($title) ?></h1>
		</header>
        
        <section>
			<?= $this->section('search_content') ?>
		</section>

         <section>
			<?= $this->section('results_content') ?>
		</section>

        
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
    <?= $this->section('javascripts') ?>
</body>
</html>