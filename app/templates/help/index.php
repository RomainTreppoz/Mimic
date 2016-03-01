<?php $this->layout('layout', ['title' => 'De l\'aide ? vous plaisantez ?']) ?>

<?php $this->start('main_content'); ?>
<h1>De l'aide ici ? Vous plaisantez.</h1>
<img src="<?= $this->assetUrl("img/014_refus.jpg")?>"class="mimic img-responsive" alt="mimique de refus">
<?php $this->stop('main_content'); ?>
