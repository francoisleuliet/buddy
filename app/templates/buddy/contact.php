
<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

		<form class="form-horizontal" method="post" action="<?php $this->url('contact') ?>">
			<div class="form-group">
				<label for="nom" class="col-sm-2 control-label">Nom</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="nom" id="nom" placeholder="nom" required>
				</div>
			</div>
			<div class="form-group">				
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-5">
					<input type="email" class="form-control" id="email" name="email" placeholder="email" required>
				</div>
			</div>
			<div class="form-group">
				<label for="mini_bio" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-5">
					<textarea class="form-control" rows="3" id="mini_bio" name="message" placeholder="Tapes ton message buddy !" required></textarea>
				</div>
			</div>	
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button name="submit" type="submit" class="btn btn-default">Envoyer Message</button>
				</div>
			</div>
		</form>
<?php $this->stop('main_content') ?>