<?php $this->layout('layout', ['title' => 'Se déconnecter', 'nav'=>'logout']) ?>

<?php $this->start('main_content') ?>

<form method="POST" action="<?= $this->url('logout'); ?>"></form>

<?php $this->stop('main_content') ?>

