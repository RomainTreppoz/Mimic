<?php $this->layout('layout', ['title' => 'Le projet', 'nav'=>'merci']) ?>

<?php $this->start('main_content') ?> 

<div class="container-fluid">

   <div class="row">

     <div class="col-md-12">
        <h2>Parlez sans dire un mot</h2>
        <h4>Les comic strips, ce sont les Peanuts, bien sûr, mais aussi Mafalda, Calvin et Hobbes.</h4>
        <h4>La concision s’impose : un "strip", 3 images, tout doit être dit.</h4>
        <img src="<?= $this->assetUrl("img/peanuts2.jpg")?>"class="mimic img-responsive img-larg-90" alt="BD Peanuts">
        <img src="<?= $this->assetUrl("img/mafalda.jpg")?>"class="mimic img-responsive img-larg-90" alt="BD Mafalda">
        <img src="<?= $this->assetUrl("img/calvin2.jpg")?>"class="mimic img-responsive img-larg-90" alt="BD Calvin et Hobbes">
        <!-- <img src="<?= $this->assetUrl("img/peanuts.jpg")?>"class="mimic img-responsive" alt="BD Peanuts">
        <img src="<?= $this->assetUrl("img/mafalda2.jpg")?>"class="mimic img-responsive" alt="BD Mafalda">
        <img src="<?= $this->assetUrl("img/calvin.jpg")?>"class="mimic img-responsive" alt="BD Calvin et Hobbes"> -->
        <h4>Et quoi de plus concis et expressif qu’une mimique ?</h4>
        <h4>Suivons le conseil de Bernard Haller, qu'on retrouvera ici ou là sur ce site : « N’ouvrez plus la bouche. Parlez sans dire un mot »</p>
        <h4>(Le visage parle, Bernard Haller, Patrick Rambaud, aux éditions Balland. 1988)</h4>
        <img src="<?= $this->assetUrl("img/le-visage-parle.jpg")?>"class="mimic img-responsive" alt="Livre le visage parle de Bernard Haller">
        <h4>Mimicstrips, c’est donc la rencontre des comics strips et des mimiques.</h4>
        <h4>Vous avez droit à 3 mimiques (et 3 textes courts).</h4>
        <h3>1,2,3... Mimicstripez! </h3>
        <br><br><br><hr/>
        <br>
        <h2>La suite</h2>
        <br>
        <h4>Ce site a été construit en assez peu de temps : il s'agit d'un travail de fin de formation</h4>
        <h4>Il faut maintenant corriger certaines imperfections, améliorer son aspect et développer ce qui existe (les recherches, les tris, n'afficher que les nouveaux strips)</h4>
        <h4>Bientôt, vous pourrez intervenir sur les strips des autres : les "liker" pour permettre une visualisation en fonction de leur popularité mais aussi les reprendre à votre compte, les détourner.</h4>
        <h4>Mais, en fonction de l'accueil que vous réserverez à ce site, d'autres possibilités sont à explorer : le lien aux réseaux sociaux, le développement d'une partie privée pour réserver certaines publications à ses seuls contacts, l'utilisation depuis les téléphones, etc...</h4>
        <h4>N'hésitez pas à nous faire part de vos idées en cliquant sur "Contact" !</h4>
      
    </div> <!-- col-md-12 -->
  </div> <!-- row -->

</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>