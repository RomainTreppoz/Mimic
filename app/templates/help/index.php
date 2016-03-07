<?php $this->layout('layout') ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">

	<div class="row">

		<div class="col-md-12">
			<div class="col-md-4">
				<img src="<?= $this->assetUrl("img/018_ignorance_miroir.jpg")?>" class="mimic img-responsive" alt="mimique d'ignorance">
			</div> <!-- col-md-4 -->

			<div class="col-md-8">
				<h1 id="titleMain">Aide</h1>
				
				<hr/>
				<h3>Un peu perdu ?<br>
				<br>
				<h5>Si vous cherchez ici quoi que ce soit de sérieux ou d'utile et ne le trouvez pas, rassurez-vous c'est normal : il n'y a rien ici qui soit destiné à être utile.</h5>
				<br>
				<h5>Si vous avez l'intention de participer à ce projet inutile et glorieux mais n'arrivez pas à le faire, alors voyons ce qui se passe.</h5>
				<h5>Avez-vous trouvé le bouton "Je veux le faire" ?</h5>
				<a class="btn btn-default glyphicon largeurBtn btn-danger" type="button" href="<?= $this->url('publier'); ?>"> <span class="glyphicon glyphicon-film absoluteIcon" aria-hidden="true"></span>Je veux le faire</a>
				<h5>La réponse est "Oui" mais vous n'avez pas pu aller plus loin à cause d'un écran vous demandant de vous connecter ?</h5>
				<h5>C'est normal : il faut être connecté pour pouvoir publier. Si vous n'êtes pas encore membre de notre confrérie "mimicstipienne", vous pouvez éventuellement vous enregister ici</h5>
				<a class="btn btn-default btn-xs" type="button" href="<?= $this->url('register'); ?>"> Pas encore membre ?</a>
				<h5>Ce qui vous sera demandé ? Une adresse électronique et un nom ou un pseudo pour signer les mimicstrips</h5>

			</div><!-- col-md-8 -->

			<div class="col-md-12">
				<h3><br>Vous êtes connecté, et vous voyez quelquechose comme ceci</h3>

				<div class="col-md-4">
					<h5>On est dans la merde</h5>
					<h5>Pas d'image ? Vraiment ? Vous devriez vous voir dans la vue-caméra, en haut.</h5>
					<h5>Procédons d'ans l'ordre:</h5>
					
						<li>Vous avez une caméra, elle est branchée, son objectif est dégagé ?</li>
						<li>Vous avez vérifié qu'elle fonctionnait avec d'autres applications ?</li>
						<li>Quand vous avez cliqué sur "Je veux le faire", il est apparu une petite fenêtre vous demandant</li>
						<ul>si vous vouliez partager votre caméra (et éventuellement laquelle). Vous devez cliquer sur "Partager le périphérique sélectionné. Voila pour Firefox"</ul>
						<ul>Et si on s'écrivait ?
						<a class="btn btn-success glyphicon  largeurBtn" type="button" href="mailto:contact@mimicstrips.com" target="_blank">
						<span class="glyphicon glyphicon-pencil absoluteIcon" aria-hidden="true"></span>Contact</a></ul>
						
						<h3>Vous vous voyez ?</h3>
						<h5>Alors : un clic sur chaque bouton photo (c'est beaucoup, ça n'est pas trop - &copy;Boby Lapointe )</h5>
						<h5>Les 3 textes sont facultatifs mais le titre est obligatoire. Et zou : envoyez !</h5>
				</div> <!-- col-md-4 -->

				<div class="col-md-8">
					<img src="<?= $this->assetUrl("img/ecran_publier.jpg")?>" class="mimic img-responsive" alt="ecran de publication">
				</div> <!-- col-md-8 -->
			

			</div> <!-- col-md-12 -->





		</div> <!-- col-md-12 -->
	
	</div> <!-- row -->

</div> <!-- container-fluid -->


<?php $this->stop('main_content'); ?>
