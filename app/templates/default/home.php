<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content'); ?>

  <div id="main">           
    <div class="container-fluid">
      <div class="row">
               
      <?php if(!empty($allStrips)): ?>

      <?php foreach ($allStrips as $keyStrip => $strip): ?>
         
        <div class="col-md-12">
        <!-- Affiche le titre -->
          <h2> <?php echo $strip['idstrips'] . " - " . $strip['titre']; ?> </h2>
          <h5> <?php echo $strip['auteur']; ?> </h5>

          <!-- Affiche les images et leurs textes respectifs -->
          <div class="col-md-3">
            <img src=" <?= $this->assetUrl('img/'.$strip['image1'])?>" class="mimic img-responsive" alt="une première mimique">
            <?php echo $strip['texte1']; ?>
          </div>

          <div class="col-md-3">
            <img src=" <?= $this->assetUrl('img/'.$strip['image2'])?>" class="mimic img-responsive" alt="une deuxième mimique">
            <p> <?php echo $strip['texte2']; ?> </p>
          </div>

          <div class="col-md-3">
            <img src=" <?= $this->assetUrl('img/'.$strip['image3'])?>" class="mimic img-responsive" alt="une troisième mimique">
            <p> <?php echo $strip['texte3']; ?> </p>
          </div>

          <div class="col-md-3">
            <button type="button" class="btn btn-danger">
              <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Réutiliser les photos
            </button>
            <br><br>
            <button type="button" class=" btn btn-danger">
              <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> Réutiliser le texte 
            </button>
            <br><br>
            <button type="button" class="btn btn-success">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> J'aime 
            </button>
            <span><?php echo $strip['nbre_like']; ?></span>
          </div>

        </div> <!-- col-md-12 -->       

      <?php endforeach;

      else: ?>
        <div class="col-md-3">
          <h2>Désolé : aucun strip ne correspond à cette recherche ...</h2>
        </div>
      <?php endif; ?>

        </div> <!-- row -->
      </div> <!-- /container-fluid -->
    </div>  <!-- /main -->

<?php $this->stop('main_content') ?>
