<?php $this->layout('layout', ['title' => 'Publier', 'nav'=>'publier']) ?>

<?php $this->start('main_content') ?> 
<div class="container-fluid">
  <form method="POST"  enctype="multipart/form-data" action="<?= $this->url('publierPost'); ?>">
    <div class="row">

      <div class="col-md-12" id="mainBoxFaire">
        <h2 id="titleMain">Crée ta propre Story !</h2>
        <!-- = remplace le php echo -->
        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/donne_ta_photo.jpg")?>"class="mimic img-responsive" name="texte1" alt="donne ta photo">

          <div class="form-group  ">
            <label for="exampleInputFile">Première photo</label>
            <input type="file" id="exampleInputFile" name="photo1">
           
          </div>
          <!--  TEXTE 1 -->
           <textarea class="form-control mimic" id="lol" rows="5" name="texte1" maxlength="255" placeholder="J'écris mon intro ici"></textarea>

        </div>
        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/donne_ta_photo.jpg")?>" class="mimic img-responsive" name="texte2" alt="donne ta photo">

          <div class="form-group">
            <label for="exampleInputFile">Deuxième photo</label>
            <input type="file" id="exampleInputFile" name="photo2">
            
          </div>
          <!-- TEXTE 2 -->
          <textarea class="form-control mimic" rows="5"  id="lol"name="texte2" maxlength="255" placeholder="Et ici la 2e partie de l'histoire"></textarea>

        </div>
        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/donne_ta_photo.jpg")?>" class="mimic img-responsive" name="texte3" alt="donne ta photo">

          <div class="form-group">
            <label for="exampleInputFile">Troisième photo</label>
            <input type="file" id="exampleInputFile" name="photo3">
            
          </div>
          <!-- TEXTE 3 -->

          <textarea class="form-control mimic" rows="5" id="lol" name="texte3" maxlength="255" placeholder="Et enfin la chute :D"></textarea>


          <button type="submit" class="btn btn-danger btn-lg" id="btnEnvoyer">
            <span class="glyphicon glyphicon-send"  aria-hidden="true"></span> Envoyer !
          </button>
        </div>

      

        </div>

      </div> <!-- col-md-11 -->


    </div> <!-- row -->

  </form>
</div> <!-- container-fluid -->
<?php $this->stop('main_content') ?>

