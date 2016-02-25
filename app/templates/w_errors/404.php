<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<h1>404. Zut il n'y a rien ici.</h1>
<img src="<?= $this->assetUrl("img/404.jpg")?>"class="mimic img-responsive" alt="erreur 404">
<?php $this->stop('main_content'); ?>
