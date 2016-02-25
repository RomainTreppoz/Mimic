<?php $this->layout('layout', ['title' => 'S\'enregistrer', 'nav'=>'register']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">

      <div class="row">

      <div class="col-md-12" id="mainBoxFaire">
        <h2 id="titleMain">Bienvenue, futur mimicstriper / euse !</h2>

        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/006_Joie.jpg")?>"class="mimic img-responsive" name="texte1" alt="mimique de joie">
        </div> <!-- div col-md-4 -->
       
        <div class="col-md-6 ">

        <form class="form-container" id="positionFormLogin" method="POST" action="<?= $this->url('registerUser'); ?>"> 
          <div class="form-group <?php if(isset($errors['email'])) echo 'has-error' ?>">

            <input type="text" class="form-control espaceInput" id="email" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Adresse électronique">
            <?php if(isset($errors['email'])): ?>
              <span class="help-block"><p class="bg-danger msgErrorTaille"><?= $errors['email']; ?></p></span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
            <input type="password" class="form-control espaceInput" id="password" name="password" placeholder="Mot de passe">
            <?php if(isset($errors['password'])): ?>
              <span  class="help-block"><p class="bg-danger msgErrorTaille"><?= $errors['password']; ?></p></span>
            <?php endif; ?>
          </div>

          <div class="form-group  <?php if(isset($errors['passwordB'])) echo 'has-error' ?>">
            <input type="password" class="form-control espaceInput" id="confirmPassword" name="confirmPassword" placeholder="Confirmez le mot de passe">
             <?php if(isset($errors['passwordB'])): ?>
              <span  class="help-block"><p class="bg-danger msgErrorTaille"><?= $errors['passwordB']; ?></p></span>
            <?php endif; ?>
          </div>

          <button type="submit" class="btn btn-warning btn-lg" id="btnEnvoyer msgErrorTaille" name="action">
            <span class="glyphicon glyphicon-log-in"  aria-hidden="true"></span>   OK
          </button>

          </form>
        </div> <!-- div col-md-6 -->

      </div> <!-- col-md-12 -->

    </div> <!-- row -->

</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>

