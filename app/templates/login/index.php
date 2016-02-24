<?php $this->layout('layout', ['title' => 'Se connecter', 'nav'=>'login']) ?>

<?php $this->start('main_content') ?> 
<div class="container-fluid">


    <div class="row">

      <div class="col-md-12" id="mainBoxFaire">
        <h2 id="titleMain">Bienvenue, vous pouvez vous connecter !</h2>
        
        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/006_Joie.jpg")?>"class="mimic img-responsive" name="texte1" alt="mimique de joie">
        </div> <!-- div col-md-4 -->


      
        <div class="col-md-6">

          <?php if(isset($errors['login'])): ?>
            <div class="alert alert-danger">
              <p><?= $errors['login'] ?></p>
            </div>
          <?php endif; ?>
       
          <form class="form-container" id="positionFormLogin" method="POST" action="<?= $this->url('loginUser'); ?>">

            <div class="form-group">
                    <input type="text" class="form-control espaceInput" id="email" name="email" placeholder="Adresse électronique">
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control espaceInput" id="password" name="password" placeholder="Mot de passe">
                  </div>

                  <div class="form-group">
                    <p class="btn btn-default btn-xs"><a href="forgotPassword.php">Mot de passe oublié ?</a></p>
                  </div>

                  <button type="submit" class="btn btn-warning btn-lg" id="btnEnvoyer" name="action">
                    <span class="glyphicon glyphicon-log-in"  aria-hidden="true"></span>   OK
                  </button>

          </form> <!-- formulaire de login -->
        </div> <!-- div col-md-6 -->
        
      </div> <!-- col-md-12 -->

    </div> <!-- row -->

</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>

